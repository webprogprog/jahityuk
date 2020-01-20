<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user() {
        return $this->belongsTo('App\Model\User');
    }
    public function requestDetails() {
        return $this->hasMany('App\Model\RequestDetail');
    }
}
