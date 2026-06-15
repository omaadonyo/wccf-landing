<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'slug' => fake()->slug(),
            'content' => fake()->paragraphs(10, true),
            'excerpt' => fake()->paragraph(3),
            'featured_image' => null,
            'author' => fake()->name(),
            'category' => fake()->randomElement(['news', 'project-update', 'testimony', 'teaching']),
            'published_at' => fake()->dateTimeBetween('-3 months', 'now'),
            'is_featured' => fake()->boolean(20),
            'is_active' => true,
        ];
    }
}
