<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JugadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Id_Player"=>$this->faker->id(),
            "Name_Player"=>$this->faker->name(),
            "TShirt_Number"=>$this->faker->number(),

        ];
    }
}
