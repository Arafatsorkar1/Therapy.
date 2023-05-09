<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LanguageTherapy>
 */
class LanguageTherapyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(40);
        return [
            'users_id'=>1,
            'title'=>$title,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->text(199),
            'image'=>'images/default.jpg',
            'price'=>1000,
            'status'=>1,
        ];
    }
}
