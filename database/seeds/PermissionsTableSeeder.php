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

        //users
        Permission::Create([

            'name' =>'Navegar Usuarios',
            'slug' =>'user.index',
            'description'=>'Lista y navega todos los usarios del sistema',
        ]);

        Permission::Create([

            'name' =>'Ver detalle de Usuarios',
            'slug' =>'user.show',
            'description'=>'Ver en detalle cada Usuario del Sistema',
        ]);

        Permission::Create([

            'name' =>'Edicion de Usuarios',
            'slug' =>'user.edit',
            'description'=>'Editar cualquier dato de un Usuario del Sistema',
        ]);

        Permission::Create([

            'name' =>'Eliminar Usuarios',
            'slug' =>'user.destroy',
            'description'=>'Eliminar cualquier Usuario del Sistema',
        ]);

        //roles

        Permission::Create([

            'name' =>'Navegar roles',
            'slug' =>'roles.index',
            'description'=>'Lista y navega todos los roles del sistema',
        ]);

        Permission::Create([

            'name' =>'Ver detalle de roles',
            'slug' =>'roles.show',
            'description'=>'Ver en detalle cada rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Creacion roles',
            'slug' =>'roles.create',
            'description'=>'Eliminar cualquier rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Edicion de roles',
            'slug' =>'roles.edit',
            'description'=>'Editar cualquier dato de un rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Eliminar roles',
            'slug' =>'roles.destroy',
            'description'=>'Eliminar cualquier rol del Sistema',
        ]);


        //producro

        Permission::Create([

            'name' =>'Navegar productos',
            'slug' =>'products.index',
            'description'=>'Lista y navega todos los productos del sistema',
        ]);

        Permission::Create([

            'name' =>'Ver detalle de productos',
            'slug' =>'products.show',
            'description'=>'Ver en detalle cada rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Creacion productos',
            'slug' =>'products.create',
            'description'=>'Eliminar cualquier rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Edicion de productos',
            'slug' =>'products.edit',
            'description'=>'Editar cualquier dato de un rol del Sistema',
        ]);

        Permission::Create([

            'name' =>'Eliminar productos',
            'slug' =>'products.destroy',
            'description'=>'Eliminar cualquier rol del Sistema',
        ]);






    }
}
