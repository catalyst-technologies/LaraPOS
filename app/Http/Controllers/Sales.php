<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Sales as SalesModel;
use App\Models\Customers as CustomersModel;
use App\Models\SaleTemp as SaleTempModel;
use App\Models\SalesItem as SalesItemModel;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;
use Illuminate\Http\Request;
use Session;

class Sales extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);
    }

    public function index() {
        $this->data['sale'] = SalesModel::orderBy('id', 'desc')
                ->where('branch_id', Auth::user()->branch_id)
                ->first();
        $this->data['customers'] = CustomersModel::select('name', 'id')
                ->get();
        return view('pages.sales.main')->with($this->data);
    }

    public function save(Request $request) {
        $sales = new SalesModel;
        $sales->customer_id = $request->input('customer_id');
        $sales->user_id = Auth::user()->id;
        $sales->payment_type = $request->input('payment_type');
        $sales->comments = $request->input('comments');
        $sales->branch_id = Session::get('branch');
        $sales->save();

        $saleItemTemp = SaleTempModel::all();
        foreach ($saleItemTemp as $value) {
            $saleItemData = new SalesItemModel;
            $saleItemData->sale_id = $sales->id;
            $saleItemData->item_id = $value->item_id;
            $saleItemData->cost_price = $value->cost_price;
            $saleItemData->selling_price = $value->selling_price;
            $saleItemData->quantity = $value->quantity;
            $saleItemData->total_cost = $value->total_cost;
            $saleItemData->total_selling = $value->total_selling;
            $saleItemData->branch_id = Session::get('branch');
            $saleItemData->save();

            #Process inventory
            $items = ItemsModel::find($value->item_id);
            $inventory = new InventoryModel;
            $inventory->item_id = $value->item_id;
            $inventory->user_id = Auth::user()->id;
            $inventory->in_out_qty = - ($value->quantity);
            $inventory->remarks = "Sale " . $sales->id;
            $inventory->branch_id = Session::get('branch');
            $inventory->save();
            # process item quantity
            $items->quantity = $items->quantity - $value->quantity;
            $items->save();
        }

        SaleTempModel::truncate();
        $itemssale = SalesItemModel::where('sale_id', $saleItemData->sale_id)->get();
        flash()->success('Sales Completed');
        return redirect()->route('sales');
    }

}
