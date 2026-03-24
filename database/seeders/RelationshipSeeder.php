<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relationships')->insert([
            ['name' => 'Father'],
            ['name' => 'Mother'],
            ['name' => 'Brother'],
            ['name' => 'Sister'],
            ['name' => 'Spouse'],
            ['name' => 'Child'],
            ['name' => 'Parent'],
            ['name' => 'Sibling'],
            ['name' => 'Other'],

        ]); 

    }
}
