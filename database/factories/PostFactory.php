<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            // user_id aleatorio entre 1 y 20
            'user_id' => $this->faker->numberBetween(1, 20),
            // Título generado con Faker "sentence"
            'title' => $this->faker->sentence,
            // Slug generado con Faker "slug"
            'slug' => $this->faker->slug,
            // Contenido generado con Faker "text"
            'content' => $this->faker->text,
        ];
    }
}
