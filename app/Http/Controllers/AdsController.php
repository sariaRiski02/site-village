<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\PointAds;
use Illuminate\Http\Request;

class AdsController extends Controller
{

    public function ads_add()
    {
        Ads::create();
        return redirect()->route('dash.home');
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

    public function ads_point_add($id)
    {
        $ads = Ads::findOrFail($id);

        // Gunakan relasi hasMany untuk create
        $pointAd = $ads->pointAds()->create();

        return redirect()->route('dash.home');
    }
}
