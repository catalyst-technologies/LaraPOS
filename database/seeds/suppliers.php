<?php

use Illuminate\Database\Seeder;
use App\Models\Suppliers as SuppliersModel;
class suppliers extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $this->create('National Book Store','Hannah Wong','hannah@wong.com','6395423485122','Tundo','Metro Manila','Manila','4444',1234);
        $this->create('ENWA','Yun Lu','yunlu@enwa.org','63952235123','Centro','Dapitan City','Zamboanga Del Norte','7100',4135);
        $this->create('Books for Green','Earth Chun','earth_chun@universe.com','131231312313','Central Barangay','Dipolog City','Zamboanga Del Norte','7100',1413);
    }
    private function create($company,$name,$email,$phone_number,$address,$city,$state,$zip,$account){
        $supplier = new SuppliersModel;
        $supplier->company_name = $company;
        $supplier->name = $name;
        $supplier->email = $email;
        $supplier->phone_number = $phone_number;
        $supplier->address = $address;
        $supplier->city = $city;
        $supplier->state = $state;
        $supplier->zip = $zip;
        $supplier->account = $account;
        $supplier->save();
    }
}
