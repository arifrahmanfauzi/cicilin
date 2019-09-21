<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

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

        for ($i=0; $i < 10; $i++) {
            # code...
            $user = User::create(
             [   'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('kebersamaan'),
                'id_role' => $faker->numberBetween(1,4),]
            );
        }

        // for ($i=0; $i <=10 ; $i++) {
        //   // code...
        //   DB::table('users')->insert([
        //     'name' => $faker->name,
        //     'email' => $faker->email,
        //     'password' => bcrypt('kebersamaan'),
        //     'id_role' => $faker->numberBetween(1,4),
        //   ]);
        // }
    }
}
