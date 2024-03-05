<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'age' => 30,
            'gender' => 'Male',
            'status' => 1,
        ]);
        User::create([
            'name' => 'aicha louafi',
            'email' => 'aicha@example.com',
            'password' => bcrypt('password'),
            'age' => 21,
            'gender' => 'female',
            'status' => 0,
        ]);
        User::create([
            'name' => 'sana louafi',
            'email' => 'sana@example.com',
            'password' => bcrypt('password'),
            'age' => 30,
            'gender' => 'female',
            'status' => 1,
        ]);
    }
}
