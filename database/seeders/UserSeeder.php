<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Lecturer and student accounts are created in their own seeders.
        User::updateOrCreate(
            ['email' => 'admin@university.ac.ug'],
            [
                'name'     => 'System Administrator',
                'password' => Hash::make('password'),
                'role'     => 'admin',
            ]
        );
    }
}
