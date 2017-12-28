<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model {

    protected $table = 'branch';

    public function manager() {
        return $this->belongsTo('App\Models\Users');
    }

}
