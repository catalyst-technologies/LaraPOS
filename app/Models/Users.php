<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use App\Models\Branches;

class Users extends Model implements Authenticatable {

    use AuthenticableTrait;

    protected $table = 'users';

    public function branch() {
        // return $this->belongsTo('App\Models\Branches');
        # Dirty Solution (subject to change)
        return Branches::where('id',$this->branch_id)->first();
    }

}
