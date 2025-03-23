<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBerandaController extends Controller
{
    public function index()
    {
        return view('dash-component.dash-home');
    }
}
