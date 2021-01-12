<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Message;
use App\User;
class MainController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        $messages = DB::select('select * From users as A, messages as B');
        $messages = collect($messages)->sortBy('id');
        $likes = DB::select('select product_id From users as A, likes as B where a.id = b.user_id');
        $likes = collect($likes);
        $likes_collection = [];
        foreach ($likes as $like) {
            # code...
            $like_id = $like->product_id;
            $likes_collection[] = $products->where('id','=',$like_id)->first();
        }
        return view('index')->with('products', $products)->with('messages' , $messages)->with('likes',$likes_collection);
    }
}
