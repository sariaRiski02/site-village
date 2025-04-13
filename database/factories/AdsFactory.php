<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ads>
 */
class AdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word,
            // 'slug' => fake()->slug,
            'description' => fake()->text,
            'sub_description' => fake()->text,
            'image' => fake()->url,
            'link' => fake()->url
        ];
    }
}
