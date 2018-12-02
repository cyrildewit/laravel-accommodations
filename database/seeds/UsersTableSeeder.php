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
        User::create([
            'name' => 'Cyril de Wit',
            'email' => 'cyrilwit@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);
    }
}
