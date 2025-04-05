<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::latest()->first();
        $default_kades = 'kades.png';
        $default_hero = 'hero.png';
        return view('home', compact('data', 'default_hero', 'default_kades'));
    }
}
