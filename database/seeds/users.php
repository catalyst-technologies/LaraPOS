<?php

use Illuminate\Database\Seeder;
use App\Models\Users as UsersModel;
use App\Models\Branches as BranchModel;

class users extends Seeder {

    private $branches = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->get_branches();

        $this->create_user('admin', 0);
        $this->create_user('staff1', 1);
        $this->create_user('staff2', 1);
        $this->create_user('staff3', 1);
        $this->create_user('staff4', 1);
        $this->create_user('staff5', 1);
    }

    private function get_branches() {
        $branches = BranchModel::select('id')->get();
        foreach ($branches as $branch) {
            $this->branches[] = $branch->id;
        }
    }

    private function create_user($name, $uType) {
        $user = new UsersModel;
        $user->username = $name;
        $user->email = $name . '@larapos.com';
        $user->password = bcrypt('12345');
        $user->user_type = $uType;
        $user->branch_id = array_random($this->branches);
        $user->save();
    }

}
