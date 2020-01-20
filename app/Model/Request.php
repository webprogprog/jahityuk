<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function requestDetails() {
        return $this->hasMany('App\Model\RequestDetail');
    }
}
