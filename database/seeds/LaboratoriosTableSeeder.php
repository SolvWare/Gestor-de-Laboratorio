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
        //Labo 1
        Laboratorio::create([
            'nameL'     => 'Laboratorio 1',
            'capL'     => '50',
            'estado'    => 'Habilitado',
        ]);

        //Labo 2
        Laboratorio::create([
            'nameL'     => 'Laboratorio 2',
            'capL'     => '55',
            'estado'    => 'Habilitado',
        ]);

        //Labo 3
        Laboratorio::create([
            'nameL'     => 'Laboratorio 3',
            'capL'     => '55',
            'estado'    => 'Habilitado',
        ]);
    }
}
