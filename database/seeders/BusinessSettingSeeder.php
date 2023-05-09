<?php

namespace Database\Seeders;

use App\Models\BusinessSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessSetting::insert(
            [
                ['type'=>'home_page_title','value'=>'THERAPY LAB LTD'],
                ['type'=>'home_page_sub_title','value'=>'Perfect Therapeutic Medicine'],
                ['type'=>'hero_description','value'=>'lorem iplum doalr sit amet.']
            ]
        );
    }
}
