<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Product;

use Illuminate\Support\Facades\Auth;
class MessageController extends Controller
{
    //
    public function insert (Request $request) { 
        $title = $request['title'];
        $content = $request['content'];
        $id = Auth::id();
        $insert_data = [
            "user_id" => $id,
            "title" => $title,
            "content" => $content,
            "created_at" => date("Y-m-d h:i:s",time())
        ];
        

        
        Message::insert($insert_data);
        return "success";
    }
}
