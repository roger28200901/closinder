<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function update (Request $request) {
        return $request;
        $user = Auth::user();
        $update = User::find($user['id']);
        $update->special = $request['special'];
        $update->img_url = $request['img_url'];
        $update->save();
    }
}
