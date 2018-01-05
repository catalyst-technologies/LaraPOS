<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);
    }

}
