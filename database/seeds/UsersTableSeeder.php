<?php

use Illuminate\Database\Seeder;

use App\Domain\Users\Models\User;

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
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);

        $jade = User::create([
            'name' => 'Jade Smith',
            'email' => 'jadesmith@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);
    }
}
