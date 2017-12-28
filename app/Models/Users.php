<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable {

    use AuthenticableTrait;

    protected $table = 'users';

    public function branch() {
        return $this->belongsTo('App\Models\Branches');
    }

}
