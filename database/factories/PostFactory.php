<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence;
        $slug = Str::slug($title, '-');

        return [
            'user_id' => fake()->randomDigit(1, 10),
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->sentence,
            'description' => fake()->sentence,
            'is_published' => fake()->boolean,
            'min_to_read' => fake()->randomDigit(),
        ];
    }
}
