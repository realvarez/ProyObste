<?php

use Illuminate\Database\Seeder;
use App\role;
use App\User;
use App\categorie;
use App\file;

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
			  
			     ];
      foreach ($roles as $role) {
           Role::create($role);
        }


        $usuario =[
     		 [
           'role_id' => 1,
           'name'  => 'juanito',
           'email'  => 'mail@mail.es',
           'email_verified_at'=> $faker->dateTime($max = 'now', $timezone = null),
           'password' => '$2y$10$6sMwLeM6t83G018kv.ftLOGI4pEso8HlAbRSj1WzTF1kcP8xTZkOm',
           'avatar_image_path' => 'imagen',
           'status' =>1,
           'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        	 ],
        	  ];
      foreach ($usuario as $usuario) {
           User::create($usuario);
        }


        $category =[
     		 [
           'category_name'  => 'licencias',
           'category_level'  => 1,
           'superior_category_id'=> 2,
           'state' => 1,
           'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        	 ],
        	  ];
      foreach ($category as $category) {
           categorie::create($category);
        }

        $files =[
     		 [
     	   'user_id'=> 1,
     	   'category_id'=>1,
           'file_name'  => 'licencia1',
           'file_path'  => 1,
           'file_year'=> $faker->year($max = 'now'),
           'state' => 1,
           'storage_type'=>1,
           'elimination_date' => $faker->dateTime($max = 'now', $timezone = null),
        	 ],
        	  ];
      foreach ($files as $files) {
           file::create($files);
        }

    }
}
