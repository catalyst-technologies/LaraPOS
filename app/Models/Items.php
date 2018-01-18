<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Inventories;
use App\Models\Users;

class Items extends Model {

    public function created_by() {
        // return $this->belongsTo('App\Models\Users');
        # Dirty Solution (subject to change)
        return Users::where('id', $this->created_by)->first();
    }

    public function inventory(){
        return $this->hasMany('App\Models\Inventories','item_id');
    }
}
