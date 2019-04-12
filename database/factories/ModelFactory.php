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
        'codeR' => $faker->text(5),
        'nameR' => $faker->name,
        'prib1' => $faker->text(5),
        'prib2' => $faker->text(5),
        'prib3' => $faker->text(5),
        'prib4' => $faker->text(5),
        'prib5' => $faker->text(5),
        'prib6' => $faker->text(5),
    ];
});

$factory->define(App\Materia::class, function (Faker\Generator $faker) {
    return [
        'codeM' => $faker->text(5),
        'nameM' => $faker->name,
        'numGM' => $faker->text(5),
    ];
});

$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    return [
        'codSis'    => $faker->text(10),
        'ciUsr'     => $faker->text(10),
        'nameUsr'   => $faker->name,
        'lastUsr'   => $faker->name,
        'rol'       => $faker->text(5),
        'materia'   => $faker->text(5),
        'grupo'     => $faker->text(5),
    ];
});