<?php

use Illuminate\Database\Seeder;
use App\Models\Branches as BranchModel;

class branch extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $branch = new BranchModel;
        $branch->name = 'Branch 1';
        $branch->phone = '+6312532523';
        $branch->street_address = 'Some Street';
        $branch->city = 'Dipolog City';
        $branch->country = 'Philippines';
        $branch->save();
        
        $branch = new BranchModel;
        $branch->name = 'Branch 2';
        $branch->phone = '+6315439534';
        $branch->street_address = 'Some Street';
        $branch->city = 'Dapitan City';
        $branch->country = 'Philippines';
        $branch->save();
        
    }

}
