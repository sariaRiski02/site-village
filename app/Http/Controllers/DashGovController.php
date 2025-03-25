<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashGovController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-gov');
    }
}
