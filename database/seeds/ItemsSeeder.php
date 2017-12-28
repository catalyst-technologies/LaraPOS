<?php

use Illuminate\Database\Seeder;
use App\Models\Items as ItemsModel;
use App\Models\Users as UsersModel;

class ItemsSeeder extends Seeder {

    private $users = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->get_users();
        for ($i = 1; $i < 20; $i++) {
            $this->create_item('Item ' . $i, random_int(5, 1000));
        }
    }

    private function get_users() {
        $users = UsersModel::where('user_type', 1)->select('id')->get();
        $arr = [];
        foreach ($users as $user) {
            $arr[] = $user->id;
        }
        $this->users = $arr;
    }

    private function create_item($item_name, $cost_price) {
        $item = new ItemsModel;
        $item->upc_ean_isbn = random_int(100000, 999999);
        $item->item_name = $item_name;
        $item->size = '50x50';
        $item->description = 'Lorem ipsum';
        $item->cost_price = $cost_price;
        $item->selling_price = $cost_price + ($cost_price * 0.05);
        $item->quantity = random_int(5, 500);
        $item->created_by = array_random($this->users);
        $item->save();
    }

}