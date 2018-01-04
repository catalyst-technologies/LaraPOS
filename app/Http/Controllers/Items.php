<?php

/**
  @todo: Transform this controller into a resource route
 */

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;

class Items extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
    }

    public function all() {
        $items = null;


        if(Session::get('branch')==0){
          $this->data['items'] = ItemsModel::get();
          }else{
          $this->data['items'] = ItemsModel::where('branch_id',Session::get('branch'))
          ->get();
          }
        #echo '<pre>';
        #echo json_encode($items,JSON_PRETTY_PRINT);
        #echo json_encode($request->input(),JSON_PRETTY_PRINT);
        #echo '</pre>';
        #exit();
        return view('pages.items.all')->with($this->data);
    }

    public function create() {
        return view('pages.items.create')->with($this->data);
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
        $item->date = $request->input('expiry_date');
        $item->branch_id = Session::get('branch');
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
        $this->data['item'] = ItemsModel::where('id', $id)->first();
        return view('pages.items.edit')->with($this->data);
    }

    public function update(Request $request, $id) {
        $item = ItemsModel::where('id', $id)->first();
        $item->upc_ean_isbn = $request->input('upc_ean_isbn');
        $item->item_name = $request->input('item_name');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->cost_price = $request->input('cost_price');
        $item->selling_price = $request->input('selling_price');
        $item->branch_id = Session::get('branch');
        $item->expiry_date = $request->input('expiry_date');
        if ($item->save()) {
            flash()->success('Item updated successfully');
        } else {
            flash()->error('Failed to update item');
        }
        return redirect()->route('items.edit', ['id' => $id]);
    }

    public function delete(Request $request) {
        $item = ItemsModel::where('id', $request->id);
        if ($item->delete()) {
            flash()->success('Item deleted successfully');
        } else {
            flash()->error('Failed to delete item');
        }
        return redirect()->route('items.all');
    }

}
