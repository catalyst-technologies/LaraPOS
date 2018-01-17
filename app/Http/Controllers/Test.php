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

      /*
      $items = ItemsModel::select(DB::raw('SUM(quantity) as item_count, item_name'))
        ->groupBy('item_name')
        ->get();
        $this->display_json($items);
      */

      $items = DB::table('items')
                   ->select(DB::raw('SUM(quantity) as item_count, item_name'))
                   ->groupBy('item_name')
                   ->get();

      $this->display_json($items);


        /** for($i=1; $i<7;$i++){

          $start = Carbon::now()->startOfMonth()->subMonth($i);
          $end   = Carbon::now()->endOfMonth()->subMonth($i);


          # $end = get last cal_days_in_month
          # start = start - 1 month
          echo $start->toDateTimeString();
          echo "--";
          echo $end->toDateTimeString();

          echo "</br>";
        } **/
      }



    private function display_json($json){
        echo '<pre>' . json_encode($json,JSON_PRETTY_PRINT) . '</pre>';
    }
}
