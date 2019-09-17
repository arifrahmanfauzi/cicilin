<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for ($i=0; $i <=10 ; $i++) {
          // code...
          DB::table('users')->insert([
            'name' => $faker->name,
            'email' =>$faker->email,
            'password' => bcrypt('kebersamaan'),
            'api_token' => bcrypt('token'),
          ]);
        }
    }
}
