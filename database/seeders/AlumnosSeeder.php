<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Alumnos::class, 20)->create();
        factory(Alumnos::class, 20)->create();
    }
}
