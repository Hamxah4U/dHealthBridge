<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Normal Account', 'description' => 'This is a normal account category.'],
            ['name' => 'Premium Account', 'description' => 'This is a premium account category with additional features.'],
            ['name' => 'Private Account', 'description' => 'This is a private account category with exclusive benefits.'],
            ['name' => 'NHIS Principal', 'description' => 'This is the NHIS Principal account category for primary account holders.'],
            ['name' => 'NHIS Dependent', 'description' => 'This is the NHIS Dependent account category for dependents of NHIS Principal account holders.'],
            ['name' => 'Standard Account', 'description' => 'This is a standard account category with standard features.'],
        ]);
    }
}
