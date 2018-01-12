<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TransferItem as TransferItemsModel;

class transfer extends Model
{
  protected $table = 'transfer';

  public function user() {
      return $this->belongsTo('App\Models\Users');
  }

  public function items_transfer(){
      $count = TransferItemsModel::where('transfer_id',$this->id)->sum('quantity');
      return $count;
  }

  public function total_cost(){
      $cost = TransferItemsModel::where('transfer_id',$this->id)->sum('total_cost');
      return $cost;
  }

}
