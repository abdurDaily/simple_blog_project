<?php

namespace App\Http\Controllers\Admin\Message;

use Session;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    //**MESSAGE INDEX */
    public function messageIndex(){
        $messages = Message::select('id','email','created_at')->latest()->get();
        return view('Backend.Layout.Message.Index', compact('messages'));
    }

    // ** STORE MESSAGE 
    public function storeMessage(Request $request){
        $storeMessage = new Message();
        $storeMessage->email = $request->subscribe;
        $storeMessage->save();
        return redirect()->route('home.index')->with('success', 'Thanks For Subscribe!');
        
        // $url = URL::route('home.index', ['#subscribe-form']);
        // return Redirect::to($url)->with('success', 'Message stored successfully!');

    }



    //**MESSAGE INDEX */
    public function delete($id){
        Message::find($id)->delete();
        toast('deleted message', 'error');
        return back();
    }
}

