<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $organizerRole = Role::where('name', 'organizer')->first();
        $userRole = Role::where('name', 'user')->first();

        $users = User::all();

        foreach ($users as $user) {
            if ($user->id === 1) {
                $user->roles()->attach($adminRole);
            } elseif ($user->id === 2) {
                $user->roles()->attach($organizerRole);
            } else {
                $user->roles()->attach($userRole);
            }
        }
    }
}
