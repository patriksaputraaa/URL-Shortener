<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 89; $i++) {
            DB::table('links')->insert([
                'short_url' => 'dw.id/'.$faker->word(2).$faker->word(2).$faker->randomLetter(),
                'user_id' => $faker->numberBetween(1, 100),
                'long_url' => $faker->url(),
                'expires_at' => Date::now()->addDays(30),
                'last_visited' => Date::now(),
            ]);
        }
    }
}
