<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{

    public function ads_add()
    {
        Ads::create(); // menambahkan ads kosong

        return redirect()->route('dash.home');
    }

    public function ads_update(Request $request, $id)
    {
        $ads = Ads::where('id', $id)->first();
        $assoc = array_filter($request->all(), function ($key) {
            return is_string($key);
        }, ARRAY_FILTER_USE_KEY);

        $array = array_filter($request->all(), function ($key) {
            return is_int($key);
        }, ARRAY_FILTER_USE_KEY);


        dd($assoc, $array);
    }


    public function ads_delete($id)
    {
        $result = Ads::where('id', $id)->delete();

        return redirect()->route('dash.home');
    }


    public function is_publish($id)
    {
        $ads = Ads::where('id', $id)->first();
        $result = Ads::where('id', $id)->update([
            'is_publish' => !$ads->is_publish,
        ]);

        return redirect()->route('dash.home');
    }
}
