<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RequestDetail extends Model
{
    public function request() {
        return $this->belongsTo('App\Model\Request');
    }
    public function item() {
        return $this->belongsTo('App\Model\Item');
    }
}
