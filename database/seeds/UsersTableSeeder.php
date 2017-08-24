<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dengan model factory
//        factory(App\User::class, 30)->create();



        // dengan seeder
        $faker = Faker\Factory::create('id_ID');

        $limit = 300;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->unique()->name,
                'address' => $faker->address,
                'telp'=>$faker->phoneNumber,
                'email'=>$faker->unique()->email,
                'password' => bcrypt(str_random(10)),
                //'remember_token' => str_random(10),
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ]);

        }

    }
}
