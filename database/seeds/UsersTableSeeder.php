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
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@laravel-forum.dev',
            'password' => bcrypt('admin'),
            'admin' => 1,
            'avatar' => asset('images/avatars/avatar.png')
        ]);
    }
}
