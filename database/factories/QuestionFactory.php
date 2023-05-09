<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id'=>1,
            'categories_id'=>rand(1,5),
            'sub_categories_id'=>rand(1,5),
            'title'=>$this->faker->text(20),
            'status'=>1,
        ];
    }
}
