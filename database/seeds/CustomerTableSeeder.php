<?php

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'user_id'           => 1,
            'first_name'        => 'Customer',
            'last_name'         => 'User 2',
            'email'             => 'customer2@gmail.com',
            'password'          => '123456',
            'email_verified_at' => now(),
        ]);
    }
}
