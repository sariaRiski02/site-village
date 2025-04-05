<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'hero_image' => 'hero.png',
            'kades_image' => 'kades.png',
            'welcome_message' => fake()->text,
            'kades_message' => fake()->text,
        ];
    }
}
