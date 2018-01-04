<?php

use Illuminate\Database\Seeder;
use App\Models\Customers as CustomersModel;
class customers extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $customer = new CustomersModel;
        $customer->name         = "Merce Diaz";
        $customer->email        = "merce_diaz@gmail.com";
        $customer->phone_number = "6391034312364";
        $customer->address      = "Bario Lapuk Barra";
        $customer->city         = "Dipolog City";
        $customer->state        = "Zamboanga Del Norte";
        $customer->zip          = "7100";
        $customer->company_name = "ABC College";
        $customer->account      = 1;
        $customer->branch_id    = 1;
        $customer->save();

        $customer = new CustomersModel;
        $customer->name         = "Jun Rayes";
        $customer->email        = "juncarlo@gmail.com";
        $customer->phone_number = "6391034355300";
        $customer->address      = "Staka";
        $customer->city         = "Dipolog City";
        $customer->state        = "Zamboanga Del Norte";
        $customer->zip          = "7100";
        $customer->company_name = "STI College Dipolog";
        $customer->account      = 2;
        $customer->branch_id    = 1;
        $customer->save();

        $customer = new CustomersModel;
        $customer->name         = "Carnen Tano";
        $customer->email        = "carmen_tano@gmail.com";
        $customer->phone_number = "6394043335300";
        $customer->address      = "Lapu lapu";
        $customer->city         = "Lapu-lapu City";
        $customer->state        = "Negros Oriental";
        $customer->zip          = "6633";
        $customer->company_name = "STI College Lapu-lapu City";
        $customer->account      = 3;
        $customer->branch_id    = 1;
        $customer->save();

        $customer = new CustomersModel;
        $customer->name         = "Lizabet Smith";
        $customer->email        = "lizbeth@smithshop.com";
        $customer->phone_number = "6391034355300";
        $customer->address      = "Central";
        $customer->city         = "Cagayan De Oro City";
        $customer->state        = "NCR";
        $customer->zip          = "7100";
        $customer->company_name = "Lizbet Learning School";
        $customer->account      = 4;
        $customer->branch_id    = 1;
        $customer->save();
    }
}
