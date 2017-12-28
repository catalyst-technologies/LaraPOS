<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model {
    public function created_by(){
        return $this->belongsTo('App\Models\Users');
    }
}
