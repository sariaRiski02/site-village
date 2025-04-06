<?php

namespace Tests\Feature;

use App\Models\Ads;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $ads = Ads::all()->first();

        $this->assertNotNull($ads->PointAds);
        dd($ads->AdsPoint);
    }
}
