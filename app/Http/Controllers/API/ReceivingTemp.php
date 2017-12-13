<?php

namespace App\Http\Controllers\API;

use Response;
use App\Models\ReceivingTemp as ReceivingTempModel;
use App\Models\ItemKitItem as ItemKitItemModel;
use App\Models\Items as ItemsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceivingTemp extends Controller {

    public function index() {
        return Response::json(ReceivingTempModel::with('item')->get());
    }

    public function create() {
        // Nothing to do here
    }

    public function store(Request $request) {
        $ReceivingTemps = new ReceivingTempModel;
        $ReceivingTemps->item_id = $request->input('item_id');
        $ReceivingTemps->cost_price = $request->input('cost_price');
        $ReceivingTemps->total_cost = $request->input('total_cost');
        $ReceivingTemps->quantity = 1;
        $ReceivingTemps->save();
        return $ReceivingTemps;
    }

    public function updateItem() {
        $ReceivingTemps = ReceivingTempModel::find(3);
        $ReceivingTemps->quantity = 5;
        $ReceivingTemps->total_cost = 54;
        $ReceivingTemps->save();
        return $ReceivingTemps;
    }

    public function show($id) {
        // Nothing to do here.
    }

    public function edit($id) {
        // Nothing to do here
    }

    public function update(Request $request, $id) {
        $ReceivingTemps = ReceivingTempModel::find($id);
        $ReceivingTemps->quantity = $request->input('quantity');
        $ReceivingTemps->total_cost = $request->input('total_cost');
        $ReceivingTemps->save();
        return $ReceivingTemps;
    }

    public function destroy($id) {
        ReceivingTempModel::destroy($id);
    }

}
