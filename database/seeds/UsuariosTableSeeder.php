<?php

use Illuminate\Database\Seeder;
use App\usuario;
class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario:: create([
            'codSis' => '201209337',
            'ciUsr' => '4049776',
            'nameUsr' =>'Frank',
            'lastUsr' =>'Gaspar',
            'rol' => 'Docente',
        ]);
    }
}
