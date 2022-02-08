<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'title' =>  $title,
            'subtitle' => $this->faker->sentence(15),
            'slug' => Str::slug($title),
            'text' => $this->faker->text('300')
        ];
    }
}
