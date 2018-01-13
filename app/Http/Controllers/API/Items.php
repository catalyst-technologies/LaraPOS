<?php

namespace App\Http\Controllers\API;

use Auth;
use Session;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Items as ItemsModel;

class Items extends Controller {

    public function index() {

        $items = array();
        $branch_id = Session::get('branch');
        if ($branch_id == 0) {
            $items = ItemsModel::get();
        } else {
            $items = ItemsModel::where('branch_id', Session::get('branch'))->get();
        }
        return Response::json($items);
    }

}
