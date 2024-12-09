<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\TeamInvitation;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamInvitationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamInvitation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()
                ->unique()
                ->safeEmail(),
            'role' => fake()->text(255),
            'team_id' => \App\Models\Team::factory(),
        ];
    }
}
