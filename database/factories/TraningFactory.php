<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Traning>
 */
class TraningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $slug = $this->faker->text(15);
        return [
            'traning_categories_id'=>rand(1,5),
            'title'=>$slug,
            'slug'=>Str::slug($slug),
            'sub_title'=>$this->faker->text(20),
            'image'=>'images/default.jpg',
            'price'=>rand(1000,5000),
            'description'=>$this->faker->text(150),
        ];
    }
}
