<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashStoreController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-store');
    }
}
