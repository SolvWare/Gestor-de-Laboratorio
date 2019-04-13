<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Rol::class, function (Faker\Generator $faker) {
    return [
        'codeR'     => $faker->numerify('rol###'),
        'nameR'     => $faker->randomElement($array = array ('Docente','Auxiliar','Estudiante')),
        'prib1'     => $faker->randomElement($array = array ('on','')),
        'prib2'     => $faker->randomElement($array = array ('on','')),
        'prib3'     => $faker->randomElement($array = array ('on','')),
        'prib4'     => $faker->randomElement($array = array ('on','')),
        'prib5'     => $faker->randomElement($array = array ('on','')),
        'prib6'     => $faker->randomElement($array = array ('on','')),
        'estado'    => $faker->randomElement($array = array ('Habilitado','Deshabilitado')),
    ];
});
$factory->define(App\Materia::class, function (Faker\Generator $faker) {
    return [
        'codeM'     => $faker->numerify('mat###'),
        'nameM'     => $faker->randomElement($array = array ('Introduccion a la Programacion',
                                                            'Elementos de la Programacion',
                                                            'Taller de Programacion',
                                                            'Ingenieria de Software',
                                                            'Taller de Ing Software',
                                                            'Redes de Computadoras')),
        'numGM'     => $faker->randomElement($array = array ('1','2','3','4')),
        'estado'    => $faker->randomElement($array = array ('Habilitado','Deshabilitado')),
    ];
});
$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    return [
        'codSis'    => $faker->randomNumber(9, true),
        'ciU'       => $faker->randomNumber(7, true),
        'nameU'     => $faker->firstName,
        'lastU'     => $faker->lastName,
        'rol'       => $faker->randomElement($array = array ('Docente','Auxiliar','Estudiante')),
        'materia'   => $faker->randomElement($array = array ('Introduccion a la Programacion',
                                                            'Elementos de la Programacion',
                                                            'Taller de Programacion',
                                                            'Ingenieria de Software',
                                                            'Taller de Ing Software',
                                                            'Redes de Computadoras')),
        'grupo'     => $faker->randomElement($array = array ('1','2','3','4')),
        'estado'    => $faker->randomElement($array = array ('Habilitado','Deshabilitado')),
    ];
});
$factory->define(App\Laboratorio::class, function (Faker\Generator $faker) {
    return [
        'nameL' => $faker->numerify('Laboratorio #'),
        'capL'   => $faker->randomElement($array = array ('40','50','60','30')),
        'estado'    => $faker->randomElement($array = array ('Habilitado','Deshabilitado')),
    ];
});
