<?php

use Illuminate\Database\Seeder;
use Domain\User\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $john = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);

        $jade = User::create([
            'first_name' => 'Jade',
            'last_name' => 'Smith',
            'email' => 'jadesmith@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);
    }
}
