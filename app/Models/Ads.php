<?php

namespace App\Models;

use App\Models\PointAds;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ads extends Model
{
    /** @use HasFactory<\Database\Factories\AdsFactory> */
    use HasFactory;
    protected $guarded = [
        'id'
    ];



    public function PointAds()
    {
        return $this->hasMany(PointAds::class, 'ads_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->is_publish = false;
        });

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }
}
