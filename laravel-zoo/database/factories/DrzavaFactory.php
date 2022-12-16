<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drzava>
 */
class DrzavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->country(),
            'broj_stanovnika' => $this->faker->numberBetween($min = 50000, $max = 10000000),
            'predsednik' => $this->faker->name()
        ];
    }
}
