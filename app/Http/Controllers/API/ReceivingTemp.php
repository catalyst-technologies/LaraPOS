<?php

namespace App\Http\Controllers\API;

use Response;
use Session;
use App\Models\ReceivingTemp as ReceivingTempModel;
use App\Models\ItemKitItem as ItemKitItemModel;
use App\Models\Items as ItemsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceivingTemp extends Controller {
    /**
     * Return a json array of all items available.
     * @return json
     */
    public function index() {
        $receivingItems = ReceivingTempModel::with('item')->get();
        return Response::json($receivingItems);
    }

    public function create() {
        // Nothing to do here
    }
    /**
     * 
     * @param Request $request
     * @return ReceivingTempModel
     */
    public function store(Request $request) {
        $ReceivingTemps = new ReceivingTempModel;
        $ReceivingTemps->item_id = $request->input('item_id');
        $ReceivingTemps->cost_price = $request->input('cost_price');
        $ReceivingTemps->total_cost = $request->input('total_cost');
        $ReceivingTemps->quantity = 1;
        $ReceivingTemps->branch_id = Session::get('branch');
        $ReceivingTemps->save();
        return $ReceivingTemps;
    }

    public function show($id) {
        // Nothing to do here.
    }

    public function edit($id) {
        // Nothing to do here
    }
    /**
     * 
     * @param Request $request
     * @param int $id
     * @return type
     */
    public function update(Request $request, int $id) {
        $ReceivingTemps = ReceivingTempModel::find($id);
        $ReceivingTemps->quantity = $request->input('quantity');
        $ReceivingTemps->total_cost = $request->input('total_cost');
        $ReceivingTemps->save();
        return $ReceivingTemps;
    }
    /**
     * 
     * @param int $id
     */
    public function destroy(int $id) {
        ReceivingTempModel::destroy($id);
    }

}
