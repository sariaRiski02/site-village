<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Service\ServiceFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashHomeController extends Controller
{
    protected $file;

    public function __construct()
    {
        $this->file = new ServiceFile();
    }

    public function index()
    {
        return view('dash-component.dash-home');
    }

    public function update(Request $request)
    {
        $service_file = $this->file;

        $validated = $request->validate([
            'hero_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
            'welcome_message' => 'nullable|string',
            'kades_image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:4096',
            'kades_message' => 'nullable|string'
        ]);

        $name_hero_image = $validated['hero_image'] ? time() . 'hero.' .  $validated['hero_image']->extension() : '';
        $name_kades_image = $validated['kades_image'] ? time() . 'kades.' . $validated['kades_image']->extension() : '';

        if (!Home::first()) {

            $service_file->store($validated['hero_image'], $name_hero_image);
            $service_file->store($validated['kades_image'], $name_kades_image);

            Home::create([
                'hero_image' => $name_hero_image,
                'kades_image' => $name_kades_image,
                'welcome_message' => $validated['welcome_message'],
                'kades_message' => $validated['kades_message']
            ]);

            return redirect()->route('dash.home');
        }


        $home = Home::first();

        $service_file->delete($home->hero_image);
        $service_file->delete($home->kades_image);
        $service_file->store($validated['hero_image'], $name_hero_image);
        $service_file->store($validated['kades_image'], $name_kades_image);

        $data = collect([
            'welcome_message' => $validated['welcome_message'] ?? '',
            'kades_message' => $validated['kades_message'] ?? '',
            'hero_image' => $name_hero_image,
            'kades_image' => $name_kades_image
        ])->filter()->toArray();

        $home->update($data);
        return redirect()->back();
    }
}
