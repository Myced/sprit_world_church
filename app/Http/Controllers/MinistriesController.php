<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinistriesController extends Controller
{
    public function index()
    {
        return view('ministries');
    }
}
