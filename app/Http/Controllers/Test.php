<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Users as UsersModel;
use App\Models\Items as ItemsModel;
use Illuminate\Support\Facades\DB;
class Test extends Controller {

    public function index() {
        $items = ItemsModel::select(DB::raw('SUM(quantity) as item_count, item_name'))
        ->groupBy('item_name')
        ->get();
        $this->display_json($items);
    }

    private function display_json($json){
        echo '<pre>' . json_encode($json,JSON_PRETTY_PRINT) . '</pre>';
    }
}
