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
        // User:: create([
        //     'name' => 'Frank',
        //     'email' => '201209338',
        //     'password' => bcrypt('4049776'),
        //     'role' => 0
        // ]);
        // User:: create([
        //     'name' => 'Juan',
        //     'email' => '123456789',
        //     'password' => bcrypt('1234567'),
        //     'role' => 1
        // ]);
        // User:: create([
        //     'name' => 'Roger',
        //     'email' => '987654321',
        //     'password' => bcrypt('1234567'),
        //     'role' => 2
        // ]);
        // User:: create([
        //     'name' => 'Frank',
        //     'email' => '201509445',
        //     'password' => bcrypt('123123123'),
        //     'role' => 3
        // ]);
    }
}
