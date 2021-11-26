<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id'   => mt_rand(3, 4),
            'comment'   => $this->faker->text(200)
        ];
    }
}
