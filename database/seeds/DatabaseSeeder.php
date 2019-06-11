<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Category;
use App\File;
use App\Permission;
use App\Roles_permission;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	$faker = Faker\Factory::create();
        $roles = [
			['role_name' =>'Admin'],
			['role_name' =>'admin'],
		];
      	foreach ($roles as $role) {
			Role::create($role);
        }
        $usuario =[
			[
				'role_id' => 1,
				'name'  => 'ricardo',
				'email'  => 'ricardo@mail.es',
				'email_verified_at'=> $faker->dateTime($max = 'now', $timezone = null),
				'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
				'avatar_image_path' => 'imagen',
				'status' =>1,
        	],
         	[
				'role_id' => 1,
				'name'  => 'barbara',
				'email'  => 'barbara@mail.es',
				'email_verified_at'=> $faker->dateTime($max = 'now', $timezone = null),
				'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
				'avatar_image_path' => 'imagen',
				'status' =>1,
        	],
        	[
				'role_id' => 1,
				'name'  => 'leiser',
				'email'  => 'leiser@mail.es',
				'email_verified_at'=> $faker->dateTime($max = 'now', $timezone = null),
				'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
				'avatar_image_path' => 'imagen',
				'status' =>1,
        	],
        	[
				'role_id' => 1,
				'name'  => 'eduardo',
				'email'  => 'eduardo@mail.es',
				'email_verified_at'=> $faker->dateTime($max = 'now', $timezone = null),
				'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
				'avatar_image_path' => 'imagen',
				'status' =>1,
        	],
		];
      	foreach ($usuario as $usuario) {
			User::create($usuario);
        }
        $category =[
			[
				'category_name'  => 'historia de la unidad',
				'category_level'  => 1,
				'state' => 1,
			],
					[
				'category_name'  => 'reglamentos',
				'category_level'  => 1,
				'state' => 1,
			],
			[
				'category_name'  => 'planes de estudio',
				'category_level'  => 1,
				'state' => 1,
				],
				[
				'category_name'  => 'correspondencia',
					'category_level'  => 1,
					'state' => 1,
				],
				[
				'category_name'  => 'enviada',
				'category_level'  => 2,
				'superior_category_id' => 4, 
				'state' => 1,
			],
			[
				'category_name'  => 'recibida',
				'category_level'  => 2,
				'superior_category_id' => 4, 
				'state' => 1,
			],
			[
				'category_name'  => 'presupuesto anual',
				'category_level'  => 1,
				'state' => 1,
			],
			[
				'category_name'  => 'contratos',
				'category_level'  => 1,
				'state' => 1
			],
			[
			'category_name'  => 'convenios docentes',
				'category_level'  => 1,
				'state' => 1,
			],   
		];
      	foreach ($category as $category) {
           Category::create($category);
        }
        $permission =[
			['name'  => 'administrar_Permisos'],
			['name'  => 'administrar_Roles'],
			['name'  => 'administrar_Usuario'],
			['name'  => 'administrar_historia de la unidad'],
			['name'  => 'ver_historia de la unidad'],
			['name'  => 'administrar_reglamentos'],
			['name'  => 'ver_reglamentos'],
			['name'  => 'administrar_planes de estudio'],
			['name'  => 'ver_planes de estudio'],
			['name'  => 'administrar_correspondencia'],
			['name'  => 'ver_correspondencia'],
			['name'  => 'administrar_enviada'],
			['name'  => 'ver_enviada'],
			['name'  => 'administrar_recibida'],
			['name'  => 'ver_recibida'],
			['name'  => 'administrar_presupuesto anual'],
			['name'  => 'ver_presupuesto anual'],
			['name'  => 'administrar_contratos'],
			['name'  => 'ver_contratos'],
			['name'  => 'administrar_convenios docentes'],
			['name'  => 'ver_convenios docentes'],
		];
      	foreach ($permission as $permission) {
			Permission::create($permission);
		}
        $permissionrole =[
			[
				'role_id'=> 1,
				'permission_id'=> 2
			],
			[
				'role_id'=> 1,
				'permission_id'=> 2,
			],
			[
				'role_id'=> 1,
				'permission_id'=> 2,
			],
      	];
		foreach ($permissionrole as $permissionrole) {
			Roles_permission::create($permissionrole);
		}
    }
}
