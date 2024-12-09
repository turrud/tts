<?php

namespace Database\Factories;

use App\Models\Formulir;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormulirFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formulir::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'institution' => fake()->text(255),
            'domicile' => fake()->text(255),
            'event' => 'Flower Bouquet | 18 Dec | 13:00 | IDR 25.000',
        ];
    }
}
