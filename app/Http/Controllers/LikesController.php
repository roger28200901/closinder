<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
class LikesController extends Controller
{
    //
    public function insert(Request $request) {
        $insert_data = [
            'user_id' => $request['user_id'],
            'product_id' => $request['product_id']
        ];
        $like = Like::where('user_id' ,$insert_data['user_id'])->where('product_id',$insert_data['product_id'])->first();
        if ($like == null ) {
            Like::insert($insert_data);
            return "yes insert";
        }

        return "no insert";
    }
}
