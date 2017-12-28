<?php

namespace App\Http\Controllers\Reports;

use Auth;

use App\Models\Sales as SalesModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sales extends Controller {
    public function index(){
        $salesReport = SalesModel::all();
        return view('pages.reports.sales.main')->with([
            'sales' => $salesReport,
        ]);
    }
}
