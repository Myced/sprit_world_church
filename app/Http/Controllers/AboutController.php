<?php

namespace App\Http\Controllers;

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
}
