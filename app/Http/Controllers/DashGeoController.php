<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashGeoController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-geo');
    }
}
