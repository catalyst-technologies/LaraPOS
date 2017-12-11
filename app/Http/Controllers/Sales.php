<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sales extends Controller{
    public function show(){
        return view('pages.sales.main');
    }
}
