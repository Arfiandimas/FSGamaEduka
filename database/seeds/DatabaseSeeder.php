<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $admin = \App\User::create([
            'name' => "Arfian Dimas Andi Permana",
            'email' => "arfiandimas@gmail.com",
            'password' => bcrypt('password')
        ]);
    }
}
