<?php

use Illuminate\Database\Seeder;
use App\Laboratorio;

class LaboratoriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Laboratorio::class, 10)->create();
    }
}
