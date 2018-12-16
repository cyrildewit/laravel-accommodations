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
        $this->call(RolesAndPermissionsTableSeeder::class);
        $this->call(ManagersTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(ListingsTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
    }
}
