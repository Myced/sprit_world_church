<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $message = new ContactMessage;

        $message->name = $request->name;
        $message->tel  = $request->tel;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();

        session()->flash('success', 'You Message has been Sent. Thank You');

        return back();
    }

    public function pastor()
    {
        return view('pastor');
    }
}
