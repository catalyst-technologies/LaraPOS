<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Items;
use App\Models\Branches;
use App\Models\Customers;

class generate_sales extends Command{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random sales data from items';


    private $customers = [];
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



    }
}
