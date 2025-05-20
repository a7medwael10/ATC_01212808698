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
            'name' => $this->faker->randomElement([
                'Tech Innovation Summit',
                'Art & Creativity Expo',
                'Live Jazz Night',
                'Startup Networking Meetup',
                'Photography Workshop',
                'Marathon for Charity',
                'AI in Healthcare Conference',
                'Street Food Festival',
                'Modern Dance Show'
            ]),
            'description' => $this->faker->paragraph(3, true),
            'category' => $this->faker->randomElement(['Technology', 'Art', 'Music', 'Sports', 'Business', 'Health']),
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
            'venue' => $this->faker->randomElement([
                'Downtown  Center',
                'City Art',
                'Open  Theater',
                'Tech Hub Auditorium',
                'Riverside Park',
                'University Hall',
                'Sports Arena'
            ]),
            'price' => $this->faker->randomFloat(2, 0, 200),
            'image' => 'Events_images/' . rand(1, 9) . '.jpg',
        ];
    }

}
