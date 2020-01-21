<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function show($user_id) {
        $items = DB::table('items')->where('user_id', Auth::user()->id)->get();
        return view('item.show', ['items' => $items])->with('user', Auth::user());
    }
}
