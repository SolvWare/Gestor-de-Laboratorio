<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        User::create([
            'name'       => 'Roger',
            'lastU'      => 'Huarachi',
            'email'      => '123456789',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '1',
        ));

        //Docente
        //Grupo 1
        User::create([
            'name'       => 'Leticia',
            'lastU'      => 'Blanco',
            'email'      => '123456701',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '2',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '1',
            'user_id'    => '2',
        ));
        //Grupo 2
        User::create([
            'name'       => 'Carla',
            'lastU'      => 'Salazar',
            'email'      => '123456702',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '3',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '2',
            'user_id'    => '3',
        ));
        //Grupo 3
        User::create([
            'name'       => 'Marco',
            'lastU'      => 'Escaleras',
            'email'      => '123456703',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '4',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '3',
            'user_id'    => '4',
        ));

        //Auxiliar
        User::create([
            'name'      => 'Daniela',
            'lastU'      => 'Diaz',
            'email'      => '123456720',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '3',
            'user_id'=> '5',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '1',
            'user_id'    => '5',
        ));

        User::create([
            'name'      => 'Limber',
            'lastU'      => 'Capirolo',
            'email'      => '123456721',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '3',
            'user_id'=> '6',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '2',
            'user_id'    => '6',
        ));

        User::create([
            'name'      => 'Antonio',
            'lastU'      => 'Banderas',
            'email'      => '123456722',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '3',
            'user_id'=> '7',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '3',
            'user_id'    => '7',
        ));

        //Estudiante
        //Grupo 1
        User::create([
            'name'      => 'Carlos',
            'lastU'      => 'Grageda',
            'email'      => '123456751',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '8',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '1',
            'user_id'    => '8',
        ));

        User::create([
            'name'      => 'Carla',
            'lastU'      => 'Arteaga',
            'email'      => '123456752',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '9',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '1',
            'user_id'    => '9',
        ));
        //Grupo 2
        User::create([
            'name'      => 'Maria',
            'lastU'      => 'Castellon',
            'email'      => '123456753',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '10',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '2',
            'user_id'    => '10',
        ));

        User::create([
            'name'      => 'Mario',
            'lastU'      => 'Castillo',
            'email'      => '123456754',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '11',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '2',
            'user_id'    => '11',
        ));
        //Grupo 3
        User::create([
            'name'      => 'Marcos',
            'lastU'      => 'Castelo',
            'email'      => '123456755',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '12',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '3',
            'user_id'    => '12',
        ));

        User::create([
            'name'      => 'Maurinho',
            'lastU'      => 'Castañeda',
            'email'      => '123456756',
            'password'   => '$2y$10$OHJS1gAYKr8sFcbXwNoHTOgsCHf8zGvQEAbbrkkyVVK9SwoNH5VaG',
            'ci'         => '67542125'
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '13',
        ));
        \DB::table('materia_user')->insert(array(
            'materia_id'    => '3',
            'user_id'    => '13',
        ));
    }
}
