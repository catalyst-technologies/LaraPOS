<?php

namespace App\Http\Controllers\API;

use Response;
use Session;
use App\Models\TransferTemp as TransferTempModel;
use App\Models\ItemKitItem as ItemKitItemModel;
use App\Models\Items as ItemsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransferTemp extends Controller {

    public function index() {
        $transferItems = TransferTempModel::with('item')->get();
        return Response::json($transferItems);
    }

    public function create() {
        // Nothing to do here
    }

    public function store(Request $request) {
        $TransferTemps = new TransferTempModel;
        $TransferTemps->item_id = $request->input('item_id');
        $TransferTemps->cost_price = $request->input('cost_price');
        $TransferTemps->total_cost = $request->input('total_cost');
        $TransferTemps->quantity = 1;
        $TransferTemps->branch_id = Session::get('branch');
        $TransferTemps->save();
        return $TransferTemps;
    }

    public function updateItem() {
        $TransferTemps = TransferTempModel::find(3);
        $TransferTemps->quantity = 5;
        $TransferTemps->total_cost = 54;
        $TransferTemps->save();
        return $TransferTemps;
    }

    public function show($id) {
        // Nothing to do here.
    }

    public function edit($id) {
        // Nothing to do here
    }

    public function update(Request $request, $id) {
        $TransferTemps = TransferTempModel::find($id);
        $TransferTemps->quantity = $request->input('quantity');
        $TransferTemps->total_cost = $request->input('total_cost');
        $TransferTemps->save();
        return $TransferTemps;
    }

    public function destroy($id) {
        TransferTempModel::destroy($id);
    }

}
