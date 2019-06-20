<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Category;
use App\File;
use App\Permission;
use App\Roles_permission;
use App\Hierarchy;
use App\Teacher_category;
use App\Academic_type;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	$faker = Faker\Factory::create();
        $roles = [
			['role_name' =>'Administrador'],
			['role_name' =>'Director de escuela'],
		];
      	foreach ($roles as $role) {
			Role::create($role);
        }
        $usuario =[
			[
				'role_id' => 1,
				'name'  => 'administrador',
				'email'  => 'administrador@mail.es',
				'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
				'avatar_image_path' => 'images/avatars/avatar.png',
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
			['name'  => 'administrar'],
			['name'  => 'administrar_Roles'],
			['name'  => 'administrar_Usuario'],
			['name'  => 'administrar_historia_de_la_unidad'],
			['name'  => 'ver_historia_de_la_unidad'],
			['name'  => 'administrar_reglamentos'],
			['name'  => 'ver_reglamentos'],
			['name'  => 'administrar_planes_de_estudio'],
			['name'  => 'ver_planes_de_estudio'],
			['name'  => 'administrar_correspondencia'],
			['name'  => 'ver_correspondencia'],
			['name'  => 'administrar_enviada'],
			['name'  => 'ver_enviada'],
			['name'  => 'administrar_recibida'],
			['name'  => 'ver_recibida'],
			['name'  => 'administrar_presupuesto_anual'],
			['name'  => 'ver_presupuesto_anual'],
			['name'  => 'administrar_contratos'],
			['name'  => 'ver_contratos'],
			['name'  => 'administrar_convenios_docentes'],
			['name'  => 'ver_convenios_docentes'],
		];
      	foreach ($permission as $permission) {
			Permission::create($permission);
		}
        $permissionrole =[
			[
				'role_id'=> 1,
				'permission_id'=> 1
			],
			[
				'role_id'=> 1,
				'permission_id'=> 2,
			],
			[
				'role_id'=> 1,
				'permission_id'=> 3,
			],
      	];
		foreach ($permissionrole as $permissionrole) {
			Roles_permission::create($permissionrole);
		}

		$hierarchies = [
			[
				'name'=>'Titular'
			],
			[
				'name'=>'Asociado'
			],
			[
				'name'=>'Asistente'
			],
			[
				'name'=>'Instructor'
			],
			[
				'name'=>'Ayudante'
			]
		];

		foreach($hierarchies as $hierarchy){
			Hierarchy::create($hierarchy);
		}

		$teacher_categories = [
			[
				'name'=>'Ayudante de profesor',
			],
			[
				'name'=>'Profesor adjunto categoría I',
			],
			[
				'name'=>'Profesor adjunto categoría II',
			],
			[
				'name'=>'Profesor instructor categoría I',
			],
			[
				'name'=>'Profesor instructor categoría II',
			]
		];

		foreach($teacher_categories as $teacher_category){
			Teacher_category::create($teacher_category);
		}

		$academic_types = [
			[
				'name'=>'Regular'
			],
			[
				'name'=>'Por horas'
			],
			[
				'name'=>'Honorarios'
			],
		];
		foreach($academic_types as $academic_type){
			Academic_type::create($academic_type);
		}

    }
}
