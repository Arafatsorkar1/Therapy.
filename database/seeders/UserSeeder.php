<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Example Admin',
            'phone'=>'01784587457',
            'password'=>Hash::make('01784587457'),
            'type'=>'admin',
        ]);
        User::create([
            'name'=>'Example User',
            'phone'=>'01785478541',
            'password'=>Hash::make('01785478541'),
            'type'=>'user',
        ]);
    }
}
