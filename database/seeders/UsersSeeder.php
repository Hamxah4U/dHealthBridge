<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'created_by' => '1',
                'first_name' => 'Muhammad',
                'surname' => 'Abidth',
                'second_name' => null,
                'email' => 'hamxah4u@gmail.com',
                'phone' => '08037856962',
                'address' => 'yalwa campus',
                'password' => Hash::make('8080'),
                'passport' => 'uploads/default.jpg',
            ]
        ]);
    }
}
