<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Console\Style\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text(15);
        return [
            'users_id'=>1,
            'image'=>'images/default.jpg',
            'icon'=>'fa fa-facebook',
            'title'=>$title,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->text(150),
            'status'=>1,
        ];
    }
}
