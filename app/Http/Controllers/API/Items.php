<?php

namespace App\Http\Controllers\API;
use Auth;
use Session;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Items as ItemsModel;

class Items extends Controller {
    public function index(){
    	$items = ItemsModel::where('branch_id',Session::get('branch'))->get();
        return Response::json($items);
    }
}
