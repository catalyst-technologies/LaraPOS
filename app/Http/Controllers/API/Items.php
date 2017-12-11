<?php

namespace App\Http\Controllers\API;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Items as ItemsModel;

class Items extends Controller {
    public function index(){
        return Response::json(ItemsModel::get());
    }
}
