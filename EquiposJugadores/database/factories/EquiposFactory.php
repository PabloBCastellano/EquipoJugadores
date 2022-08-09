<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EquiposFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          "Id_Team"=>$this->faker->id(),
          "Name_Team"=>$this->faker->name(),
          "Id_Player"=>$this->faker->unsignedBigInteger(),
        ];
    }
}
