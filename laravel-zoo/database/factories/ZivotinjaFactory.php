<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zoo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zivotinja>
 */
class ZivotinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'tip' => $this->faker->word(),
            'godine' => $this->faker->numberBetween($min = 1, $max = 101),
            'zoo_id' => Zoo::factory()
        ];
    }
}
