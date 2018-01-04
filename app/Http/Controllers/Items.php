<?php

/**
  @todo: Transform this controller into a resource route
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;
use Auth;
class Items extends Controller {

    public function all() {
        $items = null;
        if (AUth::user()->user_type == 0){
        $items = ItemsModel::get();
        }else{
        $items = ItemsModel::where('branch_id',Auth::user()->branch_id)
        ->get();
        }
        #echo '<pre>';
        #echo json_encode($items,JSON_PRETTY_PRINT);
        #echo json_encode($request->input(),JSON_PRETTY_PRINT);
        #echo '</pre>';
        #exit();
        return view('pages.items.all')->with([
                    'items' => $items,
        ]);
    }

    public function create() {
        return view('pages.items.create');
    }

    public function save(Request $request) {
        # save to items
        $item = new ItemsModel;
        $item->upc_ean_isbn = $request->input('upc_ean_isbn');
        $item->item_name = $request->input('item_name');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->cost_price = $request->input('cost_price');
        $item->selling_price = $request->input('selling_price');
        #$item->branch_id = $request->input('branch_id');
        if ($item->save()) {
            flash()->success('Item created successfully');
            # Save to inventory
            $inventory = new InventoryModel;
            $inventory->item_id = $item->id;
            $inventory->user_id = 1; # todo: put current logged in user
            $inventory->in_out_qty = $request->input('quantity');
            $inventory->remarks = 'Manual Edit of Quantity';
            if ($inventory->save()) {
                flash()->success('Inventory report created successfully');
            } else {
                flash()->error('Failed to create inventory report');
            }
            return redirect()->route('items.all');
        } else {
            flash()->error('Failed to create item');
            return redirect()->route('items.create');
        }
    }

    public function edit($id) {
        $item = ItemsModel::where('id', $id)->first();
        return view('pages.items.edit')->with([
                    'item' => $item,
        ]);
    }

    public function update(Request $request, $id) {
        $item = ItemsModel::where('id', $id)->first();
        $item->upc_ean_isbn = $request->input('upc_ean_isbn');
        $item->item_name = $request->input('item_name');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->cost_price = $request->input('cost_price');
        $item->selling_price = $request->input('selling_price');
        if ($item->save()) {
            flash()->success('Item updated successfully');
        } else {
            flash()->error('Failed to update item');
        }
        return redirect()->route('items.edit', ['id' => $id]);
    }

    public function delete(Request $request) {
        $item = ItemsModel::where('id', $id);
        if ($item->delete()) {
            flash()->success('Item deleted successfully');
        } else {
            flash()->error('Failed to delete item');
        }
        return redirect('items.all');
    }

}
