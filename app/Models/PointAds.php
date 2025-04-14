<?php

namespace App\Models;

use App\Models\Ads;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointAds extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Ads()
    {
        return $this->belongsTo(Ads::class, 'ads_id', 'id');
    }
}
