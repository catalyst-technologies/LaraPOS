<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Users as UsersModel;
use App\Models\Items as ItemsModel;

class Test extends Controller {

    public function index() {
        $user = Auth::user();
        $this->display_json($user);
        $branch = $user->branch();
        $this->display_json($branch);
    }
    
    private function display_json($json){
        echo '<pre>' . json_encode($json,JSON_PRETTY_PRINT) . '</pre>';
    }
}
