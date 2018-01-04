<?php

namespace App\Http\Controllers\API;
use Response;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SaleTemp as SaleTempModel;

class SaleTemp extends Controller {

    public function index() {

        return Response::json(SaleTempModel::with('item')->get());
    }

    public function create() {
        return view('sale.create');
    }

    public function store(Request $request) {
        $SaleTemps = new SaleTempModel;
        $SaleTemps->item_id = $request->input('item_id');
        $SaleTemps->cost_price = $request->input('cost_price');
        $SaleTemps->selling_price = $request->input('selling_price');
        $SaleTemps->quantity = 1;
        $SaleTemps->total_cost = $request->input('cost_price');
        $SaleTemps->total_selling = $request->input('selling_price');
        $SaleTemps->branch_id = Session::get('branch');
        $SaleTemps->save();
        return $SaleTemps;
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        $SaleTemps = SaleTempModel::find($id);
        $SaleTemps->quantity = $request->input('quantity');
        $SaleTemps->total_cost = $request->input('total_cost');
        $SaleTemps->total_selling = $request->input('total_selling');
        $SaleTemps->save();
        return $SaleTemps;
    }

    public function destroy($id) {
        SaleTempModel::destroy($id);
    }

}
