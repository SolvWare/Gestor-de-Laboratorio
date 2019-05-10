<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rol 1-5
        Permission::create([
            'name'  => 'Navegar roles',
            'slug'  => 'roles.index',
            'description'  => 'Lista y Navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil roles',
            'slug'  => 'roles.show',
            'description'  => 'Ver perfil todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear roles',
            'slug'  => 'roles.create',
            'description'  => 'Editar todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar roles',
            'slug'  => 'roles.edit',
            'description'  => 'Editar todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar roles',
            'slug'  => 'roles.destroy',
            'description'  => 'Eliminar todos los roles del sistema',
        ]);

        //Materia 6-10
        Permission::create([
            'name'  => 'Navegar materias',
            'slug'  => 'materias.index',
            'description'  => 'Lista y Navega todos los materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil materias',
            'slug'  => 'materias.show',
            'description'  => 'Ver perfil todos los materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear materias',
            'slug'  => 'materias.create',
            'description'  => 'Editar todos los materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar materias',
            'slug'  => 'materias.edit',
            'description'  => 'Editar todos los materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar materias',
            'slug'  => 'materias.destroy',
            'description'  => 'Eliminar todos los materias del sistema',
        ]);

        //Laboratorio 11-15
        Permission::create([
            'name'  => 'Navegar laboratorios',
            'slug'  => 'laboratorios.index',
            'description'  => 'Lista y Navega todos los laboratorios del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil laboratorios',
            'slug'  => 'laboratorios.show',
            'description'  => 'Ver perfil todos los laboratorios del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear laboratorios',
            'slug'  => 'laboratorios.create',
            'description'  => 'Editar todos los laboratorios del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar laboratorios',
            'slug'  => 'laboratorios.edit',
            'description'  => 'Editar todos los laboratorios del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar laboratorios',
            'slug'  => 'laboratorios.destroy',
            'description'  => 'Eliminar todos los laboratorios del sistema',
        ]);
    
        //Horarios 16-20
        Permission::create([
            'name'  => 'Navegar horarios',
            'slug'  => 'horarios.index',
            'description'  => 'Lista y Navega todos los horarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil horarios',
            'slug'  => 'horarios.show',
            'description'  => 'Ver perfil todos los horarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear horarios',
            'slug'  => 'horarios.create',
            'description'  => 'Editar todos los horarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar horarios',
            'slug'  => 'horarios.edit',
            'description'  => 'Editar todos los horarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar horarios',
            'slug'  => 'horarios.destroy',
            'description'  => 'Eliminar todos los horarios del sistema',
        ]);

        //Usuario 21-25
        Permission::create([
            'name'  => 'Navegar usuarios',
            'slug'  => 'users.index',
            'description'  => 'Lista y Navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil usuarios',
            'slug'  => 'users.show',
            'description'  => 'Ver perfil todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear usuarios',
            'slug'  => 'users.create',
            'description'  => 'Editar todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar usuarios',
            'slug'  => 'users.edit',
            'description'  => 'Editar todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar usuarios',
            'slug'  => 'users.destroy',
            'description'  => 'Eliminar todos los usuarios del sistema',
        ]);

        //Inscripciones
        Permission::create([
            'name'  => 'Navegar inscripciones',
            'slug'  => 'inscripciones.index',
            'description'  => 'Lista y Navega todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil inscripciones',
            'slug'  => 'inscripciones.show',
            'description'  => 'Ver perfil todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear inscripciones',
            'slug'  => 'inscripciones.create',
            'description'  => 'Editar todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar inscripciones',
            'slug'  => 'inscripciones.edit',
            'description'  => 'Editar todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar inscripciones',
            'slug'  => 'inscripciones.destroy',
            'description'  => 'Eliminar todos los inscripciones del sistema',
        ]);

        //Añadir Materias
        Permission::create([
            'name'  => 'Ver inscripciones',
            'slug'  => 'addmaterias.show',
            'description'  => 'Añadir materias para inscribir',
        ]);

        //Sesiones
        Permission::create([
            'name'  => 'Navegar sesiones',
            'slug'  => 'sesiones.index',
            'description'  => 'Lista y Navega todos los sesiones del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil sesiones',
            'slug'  => 'sesiones.show',
            'description'  => 'Ver perfil todos los sesiones del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear sesiones',
            'slug'  => 'sesiones.create',
            'description'  => 'Editar todos los sesiones del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar sesiones',
            'slug'  => 'sesiones.edit',
            'description'  => 'Editar todos los sesiones del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar sesiones',
            'slug'  => 'sesiones.destroy',
            'description'  => 'Eliminar todos los sesiones del sistema',
        ]);

        //Añadir Sesiones
        Permission::create([
            'name'  => 'Control de sesiones',
            'slug'  => 'addsesiones.index',
            'description'  => 'Añadir sesiones para inscribir',
        ]);

        //Productos
        Permission::create([
            'name'  => 'Navegar productos',
            'slug'  => 'productos.index',
            'description'  => 'Lista y Navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil productos',
            'slug'  => 'productos.show',
            'description'  => 'Ver perfil todos los productos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear productos',
            'slug'  => 'productos.create',
            'description'  => 'Editar todos los productos del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar productos',
            'slug'  => 'productos.edit',
            'description'  => 'Editar todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar productos',
            'slug'  => 'productos.destroy',
            'description'  => 'Eliminar todos los productos del sistema',
        ]);

        //Añadir productos
        Permission::create([
            'name'  => 'Añadir Productos',
            'slug'  => 'addproductos.show',
            'description'  => 'Añadir productos para sesion',
        ]);

        //Practicas
        Permission::create([
            'name'  => 'Navegar Practicas',
            'slug'  => 'practicas.index',
            'description'  => 'Lista y Navega todos los practicas del sistema',
        ]);
        Permission::create([
            'name'  => 'Perfil Practicas',
            'slug'  => 'practicas.show',
            'description'  => 'Ver perfil todos los practicas del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Practicas',
            'slug'  => 'practicas.create',
            'description'  => 'Editar todos los practicas del sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Practicas',
            'slug'  => 'practicas.edit',
            'description'  => 'Editar todos los inscripciones del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Practicas',
            'slug'  => 'practicas.destroy',
            'description'  => 'Eliminar todos los practicas del sistema',
        ]);

        //Añadir practicas
        Permission::create([
            'name'  => 'Añadir Practicas',
            'slug'  => 'addpracticas.show',
            'description'  => 'Añadir practicas para sesion',
        ]);

        
        //Mis Materias
        Permission::create([
            'name'  => 'Mis Materias',
            'slug'  => 'mismaterias.index',
            'description'  => 'Ver sus materias',
        ]);
        //Mis Horarios
        Permission::create([
            'name'  => 'Mis Horarios',
            'slug'  => 'mishorarios.index',
            'description'  => 'Ver sus materias',
        ]);
        //Mis Inscripciones
        Permission::create([
            'name'  => 'Mis Inscripciones',
            'slug'  => 'misinscripciones.index',
            'description'  => 'Ver sus materias',
        ]);
        //Mis Sesiones
        Permission::create([
            'name'  => 'Mis Sesiones',
            'slug'  => 'missesiones.index',
            'description'  => 'Ver sus materias',
        ]);
        //Mis Estudiantes
        Permission::create([
            'name'  => 'Mis Estudiantes',
            'slug'  => 'misestudiantes.index',
            'description'  => 'Ver sus Estudiantes',
        ]);
        //Mis Productos
        Permission::create([
            'name'  => 'Mis Productos',
            'slug'  => 'misproductos.index',
            'description'  => 'Ver sus Productos',
        ]);
        //Mis Practicas
        Permission::create([
            'name'  => 'Mis Practicas',
            'slug'  => 'mispracticas.index',
            'description'  => 'Ver sus Practicas',
        ]);
    }
}
