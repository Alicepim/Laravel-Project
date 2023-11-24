<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง products
        DB::table('products')->insert([
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Phone one',
                'product_desc' => 'Smart Phone',
                'product_image' => 'ph.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
        ]);
    }
}
