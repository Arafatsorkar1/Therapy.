<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TraningCategory>
 */
class TraningCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $slug = $this->faker->name;
        return [
            'name'=>$slug,
            'slug'=>Str::slug($slug),
            'image'=>'images/default.jpg',
            'status'=>1,
        ];
    }
}
