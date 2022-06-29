<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Doctor;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Doctor::factory(5)->create();
        Patient::factory(50)->create();
    }
}
