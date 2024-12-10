<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create tickets']);
        Permission::create(['name' => 'view tickets']);
        Permission::create(['name' => 'updateUsers']);
        Permission::create(['name' => 'deleteUsers']);

        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['guard_name' => 'web', 'name' => 'user']);
        $role->givePermissionTo('create tickets');

        $role = Role::create(['guard_name' => 'web', 'name' => 'freelancer']);
        $role->givePermissionTo(['create tickets', 'view tickets']);

        $role = Role::create(['guard_name' => 'web', 'name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
