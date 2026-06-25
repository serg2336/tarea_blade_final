<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'species' => fake()->randomElement(['Perro', 'Gato', 'Loro', 'Hámster', 'Conejo']),
            'age' => fake()->numberBetween(1, 15),
        ];
    }
}