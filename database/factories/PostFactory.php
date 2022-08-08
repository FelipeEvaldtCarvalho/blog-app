<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'slug' =>  $this->faker->unique()->slug(),
            'title' => $this->faker->unique()->sentence(),
            'excerpt' => '<p>' . implode('</p>&nbsp;<p>', $this->faker->paragraphs(2)) . '</p>',
            'thumb' => 'img_test.png',
            'body' => '<p>' . implode('</p>&nbsp;<p>', $this->faker->paragraphs(6)) . '</p>',
        ];
    }
}
