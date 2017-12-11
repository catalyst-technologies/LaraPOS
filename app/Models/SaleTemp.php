<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTemp extends Model {

    public function item() {
        return $this->belongsTo('App\Models\Items');
    }

}
