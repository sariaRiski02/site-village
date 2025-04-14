<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdsController extends Controller
{

    public function ads_add()
    {
        Ads::create(); // menambahkan ads kosong

        return redirect()->route('dash.home');
    }

    public function ads_update(Request $request, $id)
    {

        $adsfill = $request->only(
            'title',
            'description',
            'sub_description',
            'description',
            'image',
            'link',
            'is_publish'
        );

        $adsArray = array_filter($adsfill, function ($key) {
            return is_string($key);
        }, ARRAY_FILTER_USE_KEY);

        $pointArray = array_filter($request->all(), function ($key) {
            return is_int($key);
        }, ARRAY_FILTER_USE_KEY);

        // validation for adsArray
        $adsValid = Validator::make($adsArray, [
            'title' => 'string|max:125',
            'description' => 'nullable|string',
            'sub_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|string',
            'is_publish' => 'nullable'
        ]);
        // validation for pointArray
        $adsPoint = Validator::make($pointArray, [
            'point' => 'nullable|string',
        ]);

        if ($adsValid->fails()) {
            return redirect()->route('dash.home')->with(
                ['error' => $adsValid->errors()]
            );
        }

        if ($adsPoint->fails()) {
            return redirect()->route('dash.home')->with(
                ['error' => $adsPoint->errors()]
            );
        }

        $ads = Ads::with('PointAds')->where('id', $id);
        $is_updated = $ads->update($adsArray);

        if (!$is_updated) {
            return redirect()->route('dash.home')->with(
                ['error' => 'data gagal diubah!']
            );
        }

        foreach ($pointArray as $id => $value) {
            $point = $ads->first()->PointAds->where('id', $id)->first();
            if ($point) {
                $point->update(['point' => $value]);
            }
        }

        return redirect()->route('dash.home')->with(
            ['success' => 'perubahan berhasil di terapkan']
        );
    }


    public function ads_delete($id)
    {
        $result = Ads::where('id', $id)->delete();
        if (!$result) {
            return redirect()->route('dash.home')->with(
                ['error' => 'gagal menghapus iklan']
            );
        }
        return redirect()->route('dash.home')->with(
            ['success' => 'berhasil menghapus iklan']
        );
    }


    public function add_point($id)
    {
        $result = Ads::where('id', $id)->first()->PointAdd->create();
        if (!$result) {
            return response()->json([
                'status' => 'failed',
                'message' => 'point gagal ditambahkan'
            ], 400);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'berhasil point berhasil ditambahkan'
        ], 200);
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
