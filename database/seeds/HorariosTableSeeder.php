<?php

use Illuminate\Database\Seeder;
use App\Horario;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Intro
        //Grupo 1
        Horario::create([
            'laboratorio_id'    => '1',
            'materia_id'    => '1',
            'diaH'     => 'Lunes',
            'periodoH'     => '06:45 - 08:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '2',
            'materia_id'    => '1',
            'diaH'     => 'Miercoles',
            'periodoH'     => '06:45 - 08:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '3',
            'materia_id'    => '1',
            'diaH'     => 'Viernes',
            'periodoH'     => '06:45 - 08:15',
        ]);
        //Grupo 2
        Horario::create([
            'laboratorio_id'    => '1',
            'materia_id'    => '2',
            'diaH'     => 'Martes',
            'periodoH'     => '09:45 - 11:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '2',
            'materia_id'    => '2',
            'diaH'     => 'Jueves',
            'periodoH'     => '09:45 - 11:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '3',
            'materia_id'    => '2',
            'diaH'     => 'Sabado',
            'periodoH'     => '09:45 - 11:15',
        ]);
        //Grupo 3
        Horario::create([
            'laboratorio_id'    => '1',
            'materia_id'    => '3',
            'diaH'     => 'Lunes',
            'periodoH'     => '12:45 - 14:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '2',
            'materia_id'    => '3',
            'diaH'     => 'Miercoles',
            'periodoH'     => '12:45 - 14:15',
        ]);
        Horario::create([
            'laboratorio_id'    => '3',
            'materia_id'    => '3',
            'diaH'     => 'Viernes',
            'periodoH'     => '12:45 - 14:15',
        ]);
    }
}
