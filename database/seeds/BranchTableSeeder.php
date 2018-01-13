<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branch')->delete();
        
        \DB::table('branch')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Branch 1',
                'phone' => '+6312532523',
                'street_address' => 'Some Street',
                'city' => 'Dipolog City',
                'country' => 'Philippines',
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Branch 2',
                'phone' => '+6315439534',
                'street_address' => 'Some Street',
                'city' => 'Dapitan City',
                'country' => 'Philippines',
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
        ));
        
        
    }
}