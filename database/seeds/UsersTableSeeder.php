<?php

use App\Models\User;
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
        User::create([
            'first_name'        => 'Sales',
            'last_name'         => 'Admin',
            'email'             => 'admin@gmail.com',
            'password'          => '123456',
            'email_verified_at' => now(),
            'role'              => 'admin',
        ]);
    }
}
