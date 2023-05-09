<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Category;
use App\Models\LanguageTherapy;
use App\Models\Question;
use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Test;
use App\Models\Traning;
use App\Models\TraningCategory;
use Database\Factories\CategoryFactory;
use Database\Factories\CategoryTypeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(BusinessSettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AnswerSeeder::class);
        TraningCategory::factory(0)->create();
        Traning::factory(0)->create();
        Category::factory(0)->create();
        SubCategory::factory(0)->create();
        Answer::factory(0)->create();
        Question::factory(0)->create();
        Service::factory(0)->create();
        Test::factory(0)->create();
        LanguageTherapy::factory(0)->create();
    }
}
