<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ReceivingItem as ReceivingItemsModel;

class Receiving extends Model {

    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    public function supplier() {
        return $this->belongsTo('App\Models\Suppliers');
    }
    
    public function items_received(){
        $count = ReceivingItemsModel::where('receiving_id',$this->id)->sum('quantity');
        return $count;
    }
    
    public function total_cost(){
        $cost = ReceivingItemsModel::where('receiving_id',$this->id)->sum('total_cost');
        return $cost;
    }
    
}
