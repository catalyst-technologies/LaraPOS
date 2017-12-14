<?php

namespace App\Http\Controllers\Reports;

use Auth;

use App\Models\Receiving as ReceivingModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Receivings extends Controller {
    public function index(){
        # $receivingsReport = Receiving::all();
        $receivingReport = ReceivingModel::all();
        
        echo '<pre>';
        echo json_encode($receivingReport,JSON_PRETTY_PRINT);
        echo '</pre>';
    }
}
