<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTemp extends Model {

    protected $table = 'sale_temps';

    public function item() {
        return $this->belongsTo('App\Models\Items');
    }

}
