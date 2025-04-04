<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::latest()->first();
        return view('home', compact('data'));
    }
}
