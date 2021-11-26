<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'component_id'  => mt_rand(1, 20),
            'title'         => $this->faker->sentence(mt_rand(1, 2)),
            'description'   => $this->faker->text(200),
            'link'          => 'https://' . $this->faker->sentence(mt_rand(1, 5)),
            'image'         => 'img-feature/component/default-thumbnail.jpg',
            'status'        => 'true'
        ];
    }
}
