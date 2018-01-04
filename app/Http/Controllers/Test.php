<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Users as UsersModel;
use App\Models\Items as ItemsModel;

class Test extends Controller {

    public function index() {
        $date = Carbon::now();
        for($i=0; $i<7;$i++){
            # Use Carbon function, see Carbon documentation
            // $date = $date - 1 month use
        }
    }
    
    private function display_json($json){
        echo '<pre>' . json_encode($json,JSON_PRETTY_PRINT) . '</pre>';
    }
}
