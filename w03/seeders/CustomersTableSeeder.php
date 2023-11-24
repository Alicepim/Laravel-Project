<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง customers
        DB::table('customers')->insert([
            [
                'fname' => 'pim',
                'lname' => 'com',
                'email' => '6414421027@example.com',
                'phone_no' => '0938774657',
                'address' => 'chanthaburi',
                'province' => 'mm',
                'zipcode' => '91/21',
                'location' => 'mearht',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'mus',
                'lname' => 'com',
                'email' => '6414421023@example.com',
                'phone_no' => '0938774627',
                'address' => 'chanthaburi',
                'province' => 'mm',
                'zipcode' => '91/21',
                'location' => 'mearht',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
