<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suppliers')->delete();
        
        \DB::table('suppliers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_name' => 'National Book Store',
                'name' => 'Hannah Wong',
                'email' => 'hannah@wong.com',
                'phone_number' => '6395423485122',
                'avatar' => 'no-foto.png',
                'address' => 'Tundo',
                'city' => 'Metro Manila',
                'state' => 'Manila',
                'zip' => '4444',
                'comments' => NULL,
                'account' => '1234',
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            1 => 
            array (
                'id' => 2,
                'company_name' => 'ENWA',
                'name' => 'Yun Lu',
                'email' => 'yunlu@enwa.org',
                'phone_number' => '63952235123',
                'avatar' => 'no-foto.png',
                'address' => 'Centro',
                'city' => 'Dapitan City',
                'state' => 'Zamboanga Del Norte',
                'zip' => '7100',
                'comments' => NULL,
                'account' => '4135',
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            2 => 
            array (
                'id' => 3,
                'company_name' => 'Books for Green',
                'name' => 'Earth Chun',
                'email' => 'earth_chun@universe.com',
                'phone_number' => '131231312313',
                'avatar' => 'no-foto.png',
                'address' => 'Central Barangay',
                'city' => 'Dipolog City',
                'state' => 'Zamboanga Del Norte',
                'zip' => '7100',
                'comments' => NULL,
                'account' => '1413',
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
        ));
        
        
    }
}