<?php

namespace Database\Factories;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    protected $model = Pizza::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();

        return [
            'nombre' => $name,
            'slug' => Str::slug($name, ('-')),
            'descrpcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['pizza clasica', 'pizza especial']),
        ];
    }
}
