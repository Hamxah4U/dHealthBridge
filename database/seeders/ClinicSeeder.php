<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinics')->insert([
            ['name' => 'GOPD'],
            ['name' => 'Pediatrics'],
            ['name' => 'Obstetrics'],
            ['name' => 'Gynecology'],
            ['name' => 'Surgery'],
            ['name' => 'Orthopedics'],
            ['name' => 'ENT'],
            ['name' => 'Ophthalmology'],
            ['name' => 'Dental'],
            ['name' => 'Dermatology'],
            ['name' => 'Psychiatry'],
            ['name' => 'Cardiology'],
            ['name' => 'Neurology'],
            ['name' => 'Endocrinology'],
            ['name' => 'Gastroenterology'],
            ['name' => 'Nephrology'],
            ['name' => 'Urology'],
        ]);
    }
}
