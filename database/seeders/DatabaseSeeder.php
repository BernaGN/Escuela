<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Faculty::factory(10)->create();
        \App\Models\Career::factory(100)->create();
        \App\Models\Student::factory(10000)->create();
    }
}
