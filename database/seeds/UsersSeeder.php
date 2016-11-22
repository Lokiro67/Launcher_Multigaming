<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "MrDarkSkil",
            'password' => Hash::make("root"),
            'email' => "leohub@live.fr"
        ]);
    }
}
