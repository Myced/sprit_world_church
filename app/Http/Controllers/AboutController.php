<?php

namespace App\Http\Controllers;

use App\PastorMessage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutPastor()
    {
        return view('pastor');
    }

    public function aboutChurch()
    {
        return view('church');
    }

    public function storePastorMessage(Request $request)
    {
        $message = new PastorMessage;

        $message->name = $request->name;
        $message->tel  = $request->tel;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();

        session()->flash('success', 'You Message has been Sent. Thank You');

        return back();
    }
}
