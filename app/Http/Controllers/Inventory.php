<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;
use \Auth,
    \Redirect,
    \Validator,
    \Input,
    \Session;

class Inventory extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);

    }

    public function show($id) {
        $this->data['item'] = ItemsModel::find($id);
        $this->data['inventory'] = InventoryModel::where('item_id', $id)
                #->where('branch_id', Session::get('branch'))
                ->get();

        return view('pages.inventory.edit')->with($this->data);
    }

    public function update(Request $request, $id) {
        $item = ItemsModel::find($id);
        $item->quantity = $item->quantity + $request->input('in_out_qty');
        $item->save();

        $inventory = new InventoryModel;
        $inventory->item_id = $id;
        $inventory->user_id = Auth::user()->id;
        $inventory->in_out_qty = $request->input('in_out_qty');
        $inventory->remarks = $request->input('remarks');
        $inventory->branch_id = Session::get('branch');
        $inventory->save();

        flash()->success('Inventory updated');
        return redirect()->route('inventory.edit', ['id' => $id]);
    }

}
