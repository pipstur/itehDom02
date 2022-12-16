<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Drzava;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zoo>
 */
class ZooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'adresa' => $this->faker->address(),
            'drzava_id' => Drzava::factory()
        ];
    }
}
