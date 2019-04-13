<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolsTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(LaboratoriosTableSeeder::class);
    }
}
