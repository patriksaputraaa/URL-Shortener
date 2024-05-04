<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'username' => $faker->userName,
                'password' => $faker->password, 
                'email' => $faker->email,
                'last_login' => Date::today(),
            ]);
        }
    }
}
