<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('brands')->insert([
            ['brand_name' => 'Iphone8'],
            ['brand_name' => 'Iphone9'],
            ['brand_name' => 'Iphone10'],
            ['brand_name' => 'Iphone11'],
            ['brand_name' => 'Iphone12'],
            ['brand_name' => 'Iphone13'],
            ['brand_name' => 'Iphone14'],
            ['brand_name' => 'Iphone15'],
            ['brand_name' => 'Iphone16'],
            ['brand_name' => 'Iphone17'],
        ]);
    }
}
