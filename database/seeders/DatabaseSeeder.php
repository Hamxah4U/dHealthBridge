<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LgaSeeder;
use Database\Seeders\RelationshipSeeder;

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
            RelationshipSeeder::class
        ]);
    }
}
