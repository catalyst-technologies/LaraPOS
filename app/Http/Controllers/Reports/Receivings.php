<?php

/**
 * Responsible for rendering the receivings report view
 * @todo: Apply pagination
 */

namespace App\Http\Controllers\Reports;

use Auth;

use App\Models\Receiving as ReceivingModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Receivings extends Controller {
    public function index(){
        $receivingReport = ReceivingModel::all();
        return view('pages.reports.receiving.main')->with([
           'receivings' =>  $receivingReport,
        ]);
    }
}
