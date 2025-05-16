<?php

namespace Database\Factories;

use App\Models\Event;
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

    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'category' => $this->faker->randomElement(['Tech', 'Art', 'Music', 'Sports']),
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
            'venue' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'image' => 'https://via.placeholder.com/300x200.png?text=Event',
        ];
    }
}
