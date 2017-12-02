<?php

use Illuminate\Database\Seeder;
use App\users;

class admin_account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new users;
        $user->username = 'stradat1';
        $user->password = 'stradat1';
        $user->email = 'stradat1@stradat1.com';
        $user->user_type = '1';
        $user->save();
    }
}
