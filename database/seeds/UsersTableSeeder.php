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
        DB::table('users')->insert([
                'name' => 'admin',
                'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345'),
                'remember_token' => Str::random(10),
            ]);
    }
}
