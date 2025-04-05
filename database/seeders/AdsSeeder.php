<?php

namespace Database\Seeders;

use App\Models\Ads;
use App\Models\PointAds;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ads::factory(3)->create();
        PointAds::factory(5)->create();
    }
}
