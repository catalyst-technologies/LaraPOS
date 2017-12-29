<?php

namespace App\Http\Controllers\API;
use Auth;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Items as ItemsModel;

class Items extends Controller {
    public function index(){
    	$items = ItemsModel::where('branch_id',Auth::user()->branch_id)->get();
        return Response::json($items);
    }
}
