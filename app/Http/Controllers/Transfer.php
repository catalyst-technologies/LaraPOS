<?php

namespace App\Http\Controllers;

use Auth, Session;
use Illuminate\Http\Request;
use App\Models\Branches as BranchModel;
use App\Models\Transfer as TransferModel;
use App\Models\TransferTemp as TransferTempModel;
use App\Models\TransferItem as TransferItemModel;
use App\Models\Items as ItemsModel;
use App\Models\Inventories as InventoryModel;

class Transfer extends Controller {
    private $data = [];

    public function __construct() {
      $this->data['_branch'] = \App\Models\Branches::get();
      if(empty(Session::get('branch'))) Session::put('branch',0);

    }

    public function index() {

      $this->data['transfer'] = TransferModel::orderBy('id', 'desc')
      ->first();
      $this->data['branch'] = BranchModel::select('name', 'id')
      ->get();
      //echo '<pre>';
      //echo json_encode($this->data,JSON_PRETTY_PRINT);
      //echo json_encode($request->input(),JSON_PRETTY_PRINT);
      //echo '</pre>';
      //exit();

      return view('pages.transfer.main')->with($this->data);
    }


    public function save(Request $request)  {
      $transfers = new TransferModel;
      $transfers->branch_id = $request->input('branch_id');
      $transfers->user_id = Auth::user()->id;
      $transfers->payment_type = $request->input('payment_type');
      $transfers->comments = $request->input('comments');

      $transfers->save();

      $transferItems = transferTempModel::all();
      foreach ($transferItems as $value) {
          # save recieving item record
          $transferItemsData = new transferItemModel;
          $transferItemsData->transfer_id = $transfers->id;
          $transferItemsData->item_id = $value->item_id;
          $transferItemsData->cost_price = $value->cost_price;
          $transferItemsData->quantity = $value->quantity;
          $transferItemsData->total_cost = $value->total_cost;
          $transferItemsData->branch_id = Session::get('branch');
          $transferItemsData->save();
          # find item
          $items = ItemsModel::find($value->item_id);
          # Save inventory record
          $inventories = new InventoryModel;
          $inventories->item_id = $value->item_id;
          $inventories->user_id = Auth::user()->id;
          $inventories->in_out_qty = $value->quantity;
          $inventories->remarks = 'Transfer ' . $transfers->id;
          $inventories->branch_id = Session::get('branch`');
          $inventories->save();
          # Process item quantity
          $items->quantity = $items->quantity + $value->quantity;

          $items->save();
      }
      transferTempModel::truncate();
      $itemstransfer = transferItemModel::where('transfer_id', $transferItemsData->transfer_id)->get();

      flash()->success('Supply Transfer Successfull');
      return redirect()->route('transfer');
  }
}
