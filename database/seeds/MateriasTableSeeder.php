<?php

use Illuminate\Database\Seeder;
use App\Materia;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'nameM'     => 'Introduccion a la Programacion',
            'grupo'     => '1',
            'estado'    => 'Habilitado',
        ]);
        Materia::create([
            'nameM'     => 'Introduccion a la Programacion',
            'grupo'     => '2',
            'estado'    => 'Habilitado',
        ]);
        Materia::create([
            'nameM'     => 'Introduccion a la Programacion',
            'grupo'     => '3',
            'estado'    => 'Habilitado',
        ]);
    }
}
