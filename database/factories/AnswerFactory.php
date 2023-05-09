<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'users_id'=>1,
            'sub_categories_id'=>rand(1,5),
            'name'=>$this->faker->text(5),
            'mark'=>rand(1,20),
        ];
    }
}
