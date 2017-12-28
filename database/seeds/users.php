<?php

use Illuminate\Database\Seeder;
use App\Models\Users as UsersModel;

class users extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $user = new UsersModel;
        $user->username = "admin";
        $user->email = "admin@larapos.com";
        $user->password = bcrypt('12345');
        $user->user_type = 0;
        $user->save();

        for($i = 0; $i < 4; $i++){
            $user = new UsersModel;
            $user->username = "staff$i";
            $user->email = "staff$i@larapos.com";
            $user->password = bcrypt('12345');
            $user->user_type = 1;
            $user->save();
        }
    }
}
