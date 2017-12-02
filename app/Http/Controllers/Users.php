<?php

namespace App\Http\Controllers;

use App\Models\Users as UsersModel;
use Illuminate\Http\Request;

class Users extends Controller {

    public function __construct() {
        
    }

    public function all() {
        $users = UsersModel::get();
        return view('pages.users.list')->with([
                    'users' => $users
        ]);
    }

    public function create() {
        return view('pages.users.create');
    }

    public function view($id) {
        echo "Hello view $id";
    }

    public function edit($id) {
        $user = UsersModel::where('id', $id)->first();
        return view('pages.users.edit')->with([
                    'user' => $user
        ]);
    }

    public function save(Request $request) {
        $new = new UsersModel;
        $new->email = $request->input('email');
        $new->username = $request->input('username');
        $new->password = $request->input('password');
        $new->user_type = 1;

        if ($new->save()) {
            echo "Save success";
        } else {
            echo "save failed";
        }
    }

    public function update(Request $request, $id) {
        $user = UsersModel::where('id',$id)->first();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if($user->save()){
            echo "Success";
        }else{
            echo "failed";
        }
    }

    public function delete($id) {
        $user = UsersModel::where('id',$id)->delete();
        if($user){
            echo "Success";
        }else{
            echo "Failed";
        }
    }

}
