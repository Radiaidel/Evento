<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2, // Assuming user id 2 is the organizer
            'categorie_id' => 1, // Assuming category id 1 is the default category
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'location' => $this->faker->address,
            'nb_available_places' => $this->faker->numberBetween(1, 100),
            'reservation_mode' => $this->faker->randomElement(['automatic', 'manual']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
