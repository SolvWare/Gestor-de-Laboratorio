<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        Role::create([
            'name'      => 'Administrador',
            'slug'      => 'administrador',
            'description'=> 'Persona con control total',
            'estado'    => 'Habilitado',
            'special'   => 'all-access',
        ]);

        //Docente
        Role::create([
            'name'      => 'Docente',
            'slug'      => 'docente',
            'description'=> 'Persona con control limitado',
            'estado'    => 'Habilitado',
        ]);//materias
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '7',
            'role_id'=> '2',
        ));//horarios
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '2',
        ));//usuarios
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '22',
            'role_id'=> '2',
        ));//sesiones
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '33',
            'role_id'=> '2',
        ));//Productos
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '39',
            'role_id'=> '2',
        ));//practicas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '45',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '46',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '49',
            'role_id'=> '2',
        ));//vistas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '50',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '51',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '53',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '54',
            'role_id'=> '2',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '56',
            'role_id'=> '2',
        ));

        //Auxiliar
        Role::create([
            'name'      => 'Auxiliar',
            'slug'      => 'auxiliar',
            'description'=> 'Persona con control limitado',
            'estado'    => 'Habilitado',
        ]);//materias//perfil
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '7',
            'role_id'=> '3',
        ));//horarios//perfil
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '3',
        ));//usuarios//perfil
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '22',
            'role_id'=> '3',
        ));//sesiones
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '33',
            'role_id'=> '3',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '34',
            'role_id'=> '3',
        ));//control de seesiones
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '37',
            'role_id'=> '3',
        ));//vistas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '50',
            'role_id'=> '3',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '51',
            'role_id'=> '3',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '53',
            'role_id'=> '3',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '54',
            'role_id'=> '3',
        ));

        //Estudiante
        Role::create([
            'name'      => 'Estudiante',
            'slug'      => 'estudiante',
            'description'=> 'Persona con control limitado',
            'estado'    => 'Habilitado',
        ]);//materias
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '7',
            'role_id'=> '4',
        ));//horarios
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '4',
        ));//sesiones
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '27',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '33',
            'role_id'=> '4',
        ));//producto
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '39',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '40',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '43',
            'role_id'=> '4',
        ));
        
        //vistas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '50',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '51',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '52',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '53',
            'role_id'=> '4',
        ));
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '55',
            'role_id'=> '4',
        ));
    }
}
