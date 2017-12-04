<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller {

    public function all() {
        return view('pages.dashboard.main');
    }

}
