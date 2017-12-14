<?php

namespace App\Http\Controllers\Reports;

use Auth;

use App\Models\Sales as SalesModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sales extends Controller {
    public function index(){
        $salesReport = SalesModel::all();
        echo '<pre>';
        echo json_encode($salesReport,JSON_PRETTY_PRINT);
        echo '</pre>';
    }
}
