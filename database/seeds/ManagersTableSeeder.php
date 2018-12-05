<?php

use Illuminate\Database\Seeder;

use App\Domain\Managers\Models\Manager;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cyril = Manager::create([
            'name' => 'Cyril de Wit',
            'email' => 'cyrilwit@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pass'),
        ]);

        $cyril->assignRole('super-admin');
    }
}
