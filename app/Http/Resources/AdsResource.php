<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title_ads' => $this->title_ads,
            'description' => $this->description,
            'sub_description' =>  $this->sub_description,
            'image_ads' => $this->image_ads,
            'link' => $this->is_publish,
            'point_ads' => $this->PointAds
        ];
    }
}
