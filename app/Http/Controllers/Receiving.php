<?php

namespace App\Http\Controllers;

use Auth, Session;
use App\Models\Receiving as ReceivingModel;
use App\Models\Suppliers as SupplierModel;
use App\Models\ReceivingTemp as ReceivingTempModel;
use App\Models\ReceivingItem as ReceivingItemModel;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;
use Illuminate\Http\Request;

class Receiving extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);
    }

    public function index() {
        $this->data['receiving'] = ReceivingModel::orderBy('id', 'desc')
                ->first();
        $this->data['suppliers'] = SupplierModel::select('company_name', 'id')
                ->get();

        return view('pages.receiving.main')->with($this->data);

    }

    public function save(Request $request) {
        $receivings = new ReceivingModel;
        $receivings->supplier_id = $request->input('supplier_id');
        $receivings->user_id = Auth::user()->id;
        $receivings->payment_type = $request->input('payment_type');
        $receivings->comments = $request->input('comments');

        $receivings->save();

        $receivingItems = ReceivingTempModel::all();
        foreach ($receivingItems as $value) {
            # save recieving item record
            $receivingItemsData = new ReceivingItemModel;
            $receivingItemsData->receiving_id = $receivings->id;
            $receivingItemsData->item_id = $value->item_id;
            $receivingItemsData->cost_price = $value->cost_price;
            $receivingItemsData->quantity = $value->quantity;
            $receivingItemsData->total_cost = $value->total_cost;
            $receivingItemsData->branch_id = Session::get('branch');
            $receivingItemsData->save();
            # find item
            $items = ItemsModel::find($value->item_id);
            # Save inventory record
            $inventories = new InventoryModel;
            $inventories->item_id = $value->item_id;
            $inventories->user_id = Auth::user()->id;
            $inventories->in_out_qty = $value->quantity;
            $inventories->remarks = 'Received ' . $receivings->id;
            $inventories->branch_id = Session::get('branch');
            $inventories->save();
            # Process item quantity
            $items->quantity = $items->quantity + $value->quantity;

            $items->save();
        }
        ReceivingTempModel::truncate();
        $itemsreceiving = ReceivingItemModel::where('receiving_id', $receivingItemsData->receiving_id)->get();

        flash()->success('Recieving records saved successfully');
        return redirect()->route('receiving');
    }

}
