<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashNewsController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-news');
    }
}
