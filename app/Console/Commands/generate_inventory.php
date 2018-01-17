<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Items;
use App\Models\Branches;
use App\Models\Customers;
use App\Models\Suppliers;

use App\Models\Receiving;
use App\Models\ReceivingItem;
use App\Models\Inventories;

class generate_inventory extends Command{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:inventory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private $customers = [];
    private $suppliers = [];
    private $branches = [];
    private $items = [];
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        $this->get_data();
        $this->generate_initial_receiving();
    }

    private function get_data(){
        $this->customers = Customers::select('id')->get();
        $this->suppliers = Suppliers::select('id')->get();
        $this->branches = Branches::select('id')->get();
        $this->items = Items::get();

        $this->line('Generating sales data');
        $this->line('Items count: ' . $this->items->count());
        $this->line('Branch count: ' . $this->branches->count());
        $this->line('Customers count: ' . $this->customers->count());
    }

    private function generate_initial_receiving(){
        for($grI = 0; $grI < 150; $grI++){
            $recv = new Receiving;
            $recv->supplier_id = $this->suppliers[rand(0,count($this->suppliers) - 1)]['id'];
            $recv->user_id = 1;
            $recv->payment_type = 'cash';
            $recv->comments = 'Initial';

            if($recv->save()){
                $this->line('Receiving data generated successfully');
                $itemSelectCount = rand(0,10);
                $selectedItems = [];
                for($itemSelectIterator = 0; $itemSelectIterator < $itemSelectCount; $itemSelectIterator++){
                    $selectedItems[] = $this->items[rand(0,count($this->items) - 1)];
                }
                foreach($selectedItems as $item){
                    $qty = rand(1,10);
                    $branch = $this->branches[rand(0,count($this->branches) - 1)]['id'];

                    $rItem = new ReceivingItem;
                    $rItem->receiving_id = $recv->id;
                    $rItem->item_id = $item->id;
                    $rItem->cost_price = $item->cost_price;
                    $rItem->quantity = $qty;
                    $rItem->total_cost = $rItem->cost_price * $rItem->quantity;
                    $rItem->branch_id = $branch;
                    if($rItem->save()){
                        $this->line('Receiving record added');
                    }
                    $rInventory = new Inventories;
                    $rInventory->item_id = $item->id;
                    $rInventory->user_id = 1;
                    $rInventory->in_out_qty = $qty;
                    $rInventory->remarks = 'Received';
                    $rInventory->branch_id = $branch;
                    if($rInventory->save()){
                        $this->line('Inventory added');
                    }

                }
            }
        }

    }

    private function generate_immulated_traffic(){
        foreach($this->items as $item){
            $this->line('Generating item: ' . $item->id . ' [' . $item->item_name . ']');
            $gIterator = rand(1,10);

            for($gI = 0; $gI < $gIterator; $gI++){
                $op = rand(0,2);
                switch($op){
                    case 0:
                        $this->line('Generating sales');
                        break;
                    case 1:
                        $this->line('Generating receiving');
                        break;
                    case 2:
                        $this->line('Generating transfer');
                        break;
                }
            }
        }
    }
}
