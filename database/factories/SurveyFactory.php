<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'image' => 'https://img.freepik.com/free-vector/futuristic-technological-wallpaper_79603-1093.jpg',
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'status' => 0,
            'description' => $this->faker->paragraph(10),
            'expired_at' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}
