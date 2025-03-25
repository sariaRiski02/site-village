<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashDemoController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-demo');
    }
}
