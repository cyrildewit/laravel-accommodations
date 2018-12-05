<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Domain\Listings\Models\Listing;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

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
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        /*
        |--------------------------------------------------------------------------
        | Permissions
        |--------------------------------------------------------------------------
        */

        // Create permissions for portal
        Permission::create(['name' => 'browse_portal', 'guard_name' => 'portal']);

        // Create permissions for management
        Permission::create(['name' => 'browse_management', 'guard_name' => 'management']);

        // Create permissions for Listing model
        $this->generatePermissionsFor(Listing::class, 'portal');
        $this->generatePermissionsFor(Listing::class, 'management');

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
            'add_listings'
        ]);
    }

    /**
     * Generate BREAD permissions for the given table name.
     *
     * @return void
     */
    private function generatePermissionsFor($model, $guardName = null)
    {
        $model = app($model);
        $tableName = $model->getConnection()->getTablePrefix().$model->getTable();

        Permission::create(['name' => 'browse_'.$tableName, 'guard_name' => $guardName]);
        Permission::create(['name' => 'read_'.$tableName, 'guard_name' => $guardName]);
        Permission::create(['name' => 'edit_'.$tableName, 'guard_name' => $guardName]);
        Permission::create(['name' => 'add_'.$tableName, 'guard_name' => $guardName]);
        Permission::create(['name' => 'delete_'.$tableName, 'guard_name' => $guardName]);
    }
}
