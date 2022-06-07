<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset existing perms
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'view articles']);

        // Create Sudo Account (permissions in AuthServiceProvider)
        $sudoRole = Role::create(['name' => 'Sudo']);

        // Create Guest Account (just read permissions)
        $guestRole = Role::create(['name' => 'guest']);
        $guestRole -> givePermissionTo('view articles');
    }
}
