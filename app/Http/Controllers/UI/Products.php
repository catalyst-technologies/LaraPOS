<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Products extends Controller{
    public function all(){
        
        $data  = [];
        return view('pages.products.all')->with([
           'products' => $data 
        ]);
    }
    public function create(){
        return view('pages.products.new');
    }
}
