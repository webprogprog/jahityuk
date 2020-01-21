<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id) {
        $user = DB::table('users')->where('id', $id)->first();
        return view('profile.show', ['user' => $user]);
    }

    public function edit($id) {
        return view('profile.edit', ['user' => User::findOrFail($id)])->with('user', Auth::user());
    }

    public function update(Request $request) {
        $user = User::find($request->id);
        $user->name = $request->name;
        if($request->store_name != NULL) {
            $user->store_name = $request->store_name;
            $user->store_description = $request->store_description;
        }
        $user->save();
        return back();
    }
}
