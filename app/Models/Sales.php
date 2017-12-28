<?php

namespace App\Models;

use App\Models\SalesItem as SalesItemModel;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model {

    protected $table = 'sales';

    public function items_purchased() {
        $count = SalesItemModel::where('sale_id', $this->id)->sum('quantity');
        return $count;
    }

    public function total_cost() {
        $cost = SalesItemModel::where('sale_id', $this->id)->sum('total_cost');
        return $cost;
    }
    public function profit(){
        $sell_price = SalesItemModel::where('sale_id',$this->id)->sum('total_selling');
        $cost_price = SalesItemModel::where('sale_id', $this->id)->sum('total_cost');
        return $sell_price - $cost_price;
    }
    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    public function customer() {
        return $this->belongsTo('App\Models\Customers');
    }

}
