<?php

use Illuminate\Database\Seeder;
use Domain\Owners\Models\Owner;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $john = Owner::create([
            'name'              => 'Jamy Johnson',
            'email'             => 'jamyjohnson@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('pass'),
        ]);

        $jade = Owner::create([
            'name'              => 'Jady Smith',
            'email'             => 'jadymith@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('pass'),
        ]);
    }
}
