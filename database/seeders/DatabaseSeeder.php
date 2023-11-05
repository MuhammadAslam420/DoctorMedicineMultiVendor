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
        // \App\Models\User::factory(10)->create();
      // \App\Models\Category::factory(6)->create();
       // \App\Models\Product::factory(21)->create();
        \App\Models\PharmacistTable::factory(200)->create();
      // \App\Models\Hospital::factory(50)->create();
      // \App\Models\DoctorSpecialist::factory(20)->create();
     // \App\Models\Bloggger::factory(5)->create();



    }
}
