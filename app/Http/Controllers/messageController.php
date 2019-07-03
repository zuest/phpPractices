<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Http\Request;
class  messageController extends Controller
{

    //

    public function create(Request $request){

            $message = new Message();

            $message->title = $request->title;

            $message->save();

            return redirect('/');
    }
}
