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
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();


        $roles = [
			[
				'role_name' =>'normalUser',
			],
			[
				'role_name' =>'admin',
			],

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

        $files =[
     		 
        // 	  [
     	  //  'user_id'=> 1,
     	  //  'category_id'=>2,
        //    'file_name'  => 'Reglamento interno',
        //    'file_path'  => 1,
        //    'file_year'=> $faker->year($max = 'now'),
        //    'state' => 1,
        //    'storage_type'=>1,
        //    'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        // 	 ],
        // 	[ 'user_id'=> 1,
     	  //  'category_id'=>2,
        //    'file_name'  => 'Reglamento de convivencia',
        //    'file_path'  => 1,
        //    'file_year'=> $faker->year($max = 'now'),
        //    'state' => 1,
        //    'storage_type'=>1,
        //    'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        // 	 ],
        // 	 [
        // 	 'user_id'=> 1,
     	  //  'category_id'=>7,
        //    'file_name'  => 'Presupuesto 2018',
        //    'file_path'  => 1,
        //    'file_year'=> 2018,
        //    'state' => 1,
        //    'storage_type'=>1,
        //    'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        // 	 ],
        // 	  [
        // 	 'user_id'=> 1,
     	  //  'category_id'=>7,
        //    'file_name'  => 'Presupuesto 2017',
        //    'file_path'  => 1,
        //    'file_year'=> 2017,
        //    'state' => 1,
        //    'storage_type'=>1,
        //    'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        // 	 ],
        ];
      foreach ($files as $files) {
           file::create($files);
        }

        $permission =[
			[
				'name'  => 'Subir',
			
			],
			[
				'name'  => 'Modificar',
			
			],
			[
				'name'  => 'Ver',
			
			],
      ];
      foreach ($permission as $permission) {
           Permission::create($permission);
        }

      
        $permissionrole =[
			[
				'role_id'=> 1,
				'permission_id'=> 2,
				
			
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
