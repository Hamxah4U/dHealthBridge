<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ClinicSeeder;
use Database\Seeders\LgaSeeder;
use Database\Seeders\RelationshipSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            GenderSeeder::class,
            StateSeeder::class,
            CategorySeeder::class,      
            LgaSeeder::class,     
            UsersSeeder::class, 
            RelationshipSeeder::class,
            ClinicSeeder::class
        ]);
    }
}
