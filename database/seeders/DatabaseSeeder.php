<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Order matters: courses need lecturers, registrations need students and courses.
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LecturerSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            RegistrationSeeder::class,
        ]);
    }
}
