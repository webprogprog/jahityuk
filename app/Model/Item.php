<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function itemImages() {
        return $this->hasMany('App\Model\ItemImage');
    }
    public function requestDetails() {
        return $this->hasMany('App\Model\RequestDetail');
    }
}
