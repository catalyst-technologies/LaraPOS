<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Branch extends Controller {
    public function select_branch($id){
        Session::put('branch', $id);
    }
}
