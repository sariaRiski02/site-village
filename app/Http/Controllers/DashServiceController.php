<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashServiceController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-service');
    }
}
