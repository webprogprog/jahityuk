<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    public function item() {
        return $this->belongsTo('App\Model\Item');
    }
}
