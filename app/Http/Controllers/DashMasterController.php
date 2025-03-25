<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashMasterController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-master');
    }
}
