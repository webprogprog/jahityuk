<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $primary = 'customer_id';
    protected $fillable = [
        'user_id', 'name', 'address', 'phone', 'profile_protected',
    ];

    public function index() {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
