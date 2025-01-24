<?php

namespace Database\Factories;
use App\Models\Course;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'img' => $this->faker->imageUrl(),
            'track_id' => Track::inRandomOrder()->first()->id        ];
    }
}
