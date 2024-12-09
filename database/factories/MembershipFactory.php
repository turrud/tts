<?php

namespace Database\Factories;

use App\Models\Membership;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembershipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Membership::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => fake()->randomNumber(),
            'user_id' => fake()->randomNumber(),
            'role' => fake()->text(255),
        ];
    }
}
