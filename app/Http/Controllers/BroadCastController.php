<?php

namespace App\Http\Controllers;
use App\Events\Event2x;
use Illuminate\Http\Request;

class BroadCastController extends Controller
{
    //

    public function BroadCastNow(Request $request){
    $data = 'Some data';
     Event2x::dispatch($data);
   // event(new Event2x("Hello World"));
    return response()->json(['status' => 'Event broadcasted!']);
    }
}
