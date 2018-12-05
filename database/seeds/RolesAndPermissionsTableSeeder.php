<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Seed the roles and permissions table.
     *
     * @todo
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app('cache')->forget('spatie.permission.cache');

        /*
        |--------------------------------------------------------------------------
        | Permissions
        |--------------------------------------------------------------------------
        */

        // Create permissions for portal
        Permission::create(['name' => 'browse_portal', 'guard_name'=> 'portal']);

        // Create permissions for management
        Permission::create(['name' => 'browse_management', 'guard_name'=> 'management']);

        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        // Create super admin role
        $role = Role::create(['name' => 'super-admin', 'guard_name'=> 'management']);

        // Create member role and assign permissions
        $role = Role::create(['name' => 'member']);
        $role->givePermissionTo([
            'browse_portal',
        ]);
    }

    /**
     * Generate BREAD permissions for the given table name.
     *
     * @return void
     */
    private function generatePermissionsFor($tableName)
    {
        Permission::create(['name' => 'browse_'.$tableName]);
        Permission::create(['name' => 'read_'.$tableName]);
        Permission::create(['name' => 'edit_'.$tableName]);
        Permission::create(['name' => 'add_'.$tableName]);
        Permission::create(['name' => 'delete_'.$tableName]);
    }
}
