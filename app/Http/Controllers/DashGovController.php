<?php

namespace App\Http\Controllers;

use App\Models\PageGov;
use Illuminate\Http\Request;

class DashGovController extends Controller
{
    public function index()
    {
        $data = PageGov::first();
        return view('dash-component.dash-gov', compact('data'));
    }

    public function setWelcomeMessage(Request $request)
    {
        $input = $request->validate([
            'welcome_message' => 'nullable|string',
            'description' => 'nullable'
        ]);

        $result = PageGov::updateOrCreate(['id' => 0], [
            'welcome_message' => $input['welcome_message'],
            'description' => $input['description'],
        ]);

        if (!$result) {
            return redirect()->route('dash.gov')->with('error', "Perubahan Gagal diterapkan, COBA LAGI!");
        }
        return redirect()->route('dash.gov')->with('success', "Perubahan berhasil diterapkan");
    }

    public function setHistory(Request $request)
    {
        $data = $request->validate([
            'title_history' => 'nullable|string',
            'history' => 'nullable'
        ]);

        $result = PageGov::updateOrCreate([
            'id' => 0
        ], [
            'title_history' => $data['title_history'],
            'history' => $data['history']
        ]);

        if (!$result) {
            return redirect()->route('dash.gov')->with('error', 'Perubahan Gagal diterapkan');
        }
        return redirect()->route('dash.gov')->with('success', 'Perubahan berhasil diterapkan');
    }
}
