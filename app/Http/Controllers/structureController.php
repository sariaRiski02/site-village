<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class structureController extends Controller
{
    public function pemerintah()
    {
        return view('structure.structure-gov');
    }

    public function bpd()
    {
        return view('structure.structure-bpd');
    }
}
