<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Merce Diaz',
                'email' => 'merce_diaz@gmail.com',
                'phone_number' => '6391034312364',
                'avatar' => 'no-foto.png',
                'address' => 'Bario Lapuk Barra',
                'city' => 'Dipolog City',
                'state' => 'Zamboanga Del Norte',
                'zip' => '7100',
                'comment' => NULL,
                'company_name' => 'ABC College',
                'account' => '1',
                'branch_id' => 1,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jun Rayes',
                'email' => 'juncarlo@gmail.com',
                'phone_number' => '6391034355300',
                'avatar' => 'no-foto.png',
                'address' => 'Staka',
                'city' => 'Dipolog City',
                'state' => 'Zamboanga Del Norte',
                'zip' => '7100',
                'comment' => NULL,
                'company_name' => 'STI College Dipolog',
                'account' => '2',
                'branch_id' => 1,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carnen Tano',
                'email' => 'carmen_tano@gmail.com',
                'phone_number' => '6394043335300',
                'avatar' => 'no-foto.png',
                'address' => 'Lapu lapu',
                'city' => 'Lapu-lapu City',
                'state' => 'Negros Oriental',
                'zip' => '6633',
                'comment' => NULL,
                'company_name' => 'STI College Lapu-lapu City',
                'account' => '3',
                'branch_id' => 1,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lizabet Smith',
                'email' => 'lizbeth@smithshop.com',
                'phone_number' => '6391034355300',
                'avatar' => 'no-foto.png',
                'address' => 'Central',
                'city' => 'Cagayan De Oro City',
                'state' => 'NCR',
                'zip' => '7100',
                'comment' => NULL,
                'company_name' => 'Lizbet Learning School',
                'account' => '4',
                'branch_id' => 1,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
        ));
        
        
    }
}