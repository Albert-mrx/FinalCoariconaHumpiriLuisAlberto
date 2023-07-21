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
            
            'user_id' => $this->faker->numberBetween(1, 20),

            'title' => $this->faker->sentence,

            'slug' => $this->faker->slug,

            'content' => $this->faker->text,
        ];
    }
}

