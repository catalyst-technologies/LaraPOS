<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;

use \Auth, \Redirect, \Validator, \Input, \Session;

class Inventory extends Controller{
    public function show($id){
        $item = ItemsModel::where('branch_id',Auth::user()->branch_id)
        ->find($id);
        $inventory = InventoryModel::where('item_id',$id)
        ->where('branch_id',Auth::user()-branch_id)
        ->get();
        return view('pages.inventory.edit')
            ->with('item',$item)
            ->with('inventory',$inventory);
    }
    public function update(Request $request,$id){
        $item = ItemsModel::find($id);
        $item->quantity = $item->quantity + $request->input('in_out_qty');
        $item->save();

        $inventory = new InventoryModel;
        $inventory->item_id = $id;
        $inventory->user_id = 1; # Todo: make current logged in user
        $inventory->in_out_qty = $request->input('in_out_qty');
        $inventory->remarks = $request->input('remarks');
        $inventory->save();

        flash()->success('Inventory updated');
        return redirect()->route('inventory.edit',['id'=>$id]);
    }
}
