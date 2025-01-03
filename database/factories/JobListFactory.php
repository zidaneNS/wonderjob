<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobList>
 */
class JobListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'user_id' => User::factory(),
            'type' => fake()->randomElement(['WFH', 'WFO']),
            'salary' => fake()->randomElement(['$10.000', '$20.000', '$30.000']),
            'location' => fake()->city
        ];
    }
}
