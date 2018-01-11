<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferTemp extends Model {

    public function item() {
        return $this->belongsTo('App\Models\Items');
    }

}
