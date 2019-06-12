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
        \App\User::create([
            'name' => "Admin",
            'email' => "admin@example.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
    }
}
