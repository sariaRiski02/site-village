<?php

namespace App\Models;

use App\Models\Ads;
use Illuminate\Database\Eloquent\Model;

class PointAds extends Model
{



    public function Ads()
    {
        return $this->belongsTo(Ads::class, 'ads_id', 'id');
    }
}
