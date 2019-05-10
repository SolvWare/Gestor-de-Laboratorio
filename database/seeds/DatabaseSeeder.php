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
        $this->call(PermissionsTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LaboratoriosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HorariosTableSeeder::class);
    }
}
