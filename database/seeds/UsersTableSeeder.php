<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@larapos.com',
                'password' => '$2y$10$WANeAtLpIkHCIASBCLHELuI3xE2kmZNvhVKQ1w22JPEa5rqBXbAAO',
                'user_type' => 0,
                'branch_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'staff1',
                'email' => 'staff1@larapos.com',
                'password' => '$2y$10$AePI1wr0tTfHw0b40idDfuNB8sGrjfBa2EBtZSLPdMmbMQgCXGfLa',
                'user_type' => 1,
                'branch_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'staff2',
                'email' => 'staff2@larapos.com',
                'password' => '$2y$10$tt.hpGU4sgNpf.cw9PoMq.IaBcvpKMcRxMty17U9Ltdino0Zcn8/e',
                'user_type' => 1,
                'branch_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'staff3',
                'email' => 'staff3@larapos.com',
                'password' => '$2y$10$EwAJUc3CmIfMp90AqkMtMebIAhGT39H2YgizkC4iqFNtyg83FDtJi',
                'user_type' => 1,
                'branch_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:47',
                'updated_at' => '2018-01-13 14:03:47',
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'staff4',
                'email' => 'staff4@larapos.com',
                'password' => '$2y$10$wOCE2NmQkV95fgekoUaJwulOh4EXlevPt6n.xA42N7lycJEVbYZ/C',
                'user_type' => 1,
                'branch_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'staff5',
                'email' => 'staff5@larapos.com',
                'password' => '$2y$10$aY/J3reEJqujSA.d24FbCulsvMuRKIrgp9n1hpFdScYT4WKjSUSkO',
                'user_type' => 1,
                'branch_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-01-13 14:03:48',
                'updated_at' => '2018-01-13 14:03:48',
            ),
        ));
        
        
    }
}