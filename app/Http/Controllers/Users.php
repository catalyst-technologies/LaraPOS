<?php

namespace App\Http\Controllers;

use App\Models\Users as UsersModel;
use Illuminate\Http\Request;
use Session;

class Users extends Controller {

    public function __construct() {

    }

    public function all() {
        $users = UsersModel::get(); # get all users
        return view('pages.users.all')->with([
                    'users' => $users
        ]);
    }

    public function create() {
        return view('pages.users.create');
    }

    public function edit($id) {
        /*
         * Get a user that matches with the $id
         * the first() function makes it return only one object, as oppose to
         * the get function used in the all() function in this controller which
         * returns an array of data rows.
         */
        $user = UsersModel::where('id', $id)->first();
        return view('pages.users.edit')->with([
                    'user' => $user
        ]);
    }

    public function save(Request $request) {
        $new = new UsersModel; # create a new instance of the user model
        # start filling in the model
        $new->email = $request->input('email');
        $new->username = $request->input('username');
        $new->password = $request->input('password');
        $new->user_type = $request->input('user_type');
        # end filling in the model
        try {
            if ($new->save()) { # save the new user
                flash()->success('User registered successfully');
                return redirect()->route('users.all');
            } else {
                flash()->error('User registration failed');
                return redirect()->route('users.create');
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            flash()->error('Username or email already in use');
            return redirect()->route('users.create');
        }
    }

    public function update(Request $request, $id) {
        $user = UsersModel::where('id', $id)->first(); # return the first data that matches the id. We use first() function because we are only expecting one data row.
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        if ($user->save()) { # save the data (update)
            flash()->success('User details updated successfully');
            return redirect()->route('users.edit',['id'=>$user->id]);
        } else {
            flash()->error('failed updating user details');
            return redirect()->route('user.edit',['id'=>$user->id]);
        }
    }

    public function delete($id) {
        $user = UsersModel::where('id', $id) # get the user that matches the $id
                ->delete(); # delete the matched data
        if ($user) {
            flash()->success('Removed user successfully');
            return redirect()->route('users.all');
        } else {
            flash()->error('Failed to delete user');
            return redirect()->route('users.all');
        }
    }

}
