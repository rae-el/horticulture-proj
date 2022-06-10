<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions
        //mother
        Permission::create(['name'=>'create mother']);
        Permission::create(['name'=>'edit mother']);
        Permission::create(['name'=>'delete mother']);
        Permission::create(['name'=>'view mother']);
        //pest-disease
        Permission::create(['name'=>'create pest-disease']);
        Permission::create(['name'=>'edit pest-disease']);
        Permission::create(['name'=>'delete pest-disease']);
        Permission::create(['name'=>'view pest-disease']);
        //plant
        Permission::create(['name'=>'create plant']);
        Permission::create(['name'=>'edit plant']);
        Permission::create(['name'=>'delete plant']);
        Permission::create(['name'=>'view plant']);
        //user
        Permission::create(['name'=>'create user']);
        Permission::create(['name'=>'edit user']);
        Permission::create(['name'=>'delete user']);
        Permission::create(['name'=>'view user']);


        //create roles and assign permissions
        $roleStaff = Role::create(['name'=>'staff']);
        $roleStaff = givePermissionTo('create mother');
        $roleStaff = givePermissionTo('edit mother');
        $roleStaff = givePermissionTo('delete mother');
        $roleStaff = givePermissionTo('view mother');
        $roleStaff = givePermissionTo('create pest-disease');
        $roleStaff = givePermissionTo('edit pest-disease');
        $roleStaff = givePermissionTo('delete pest-disease');
        $roleStaff = givePermissionTo('view pest-disease');
        $roleStaff = givePermissionTo('create plant');
        $roleStaff = givePermissionTo('edit plant');
        $roleStaff = givePermissionTo('delete plant');
        $roleStaff = givePermissionTo('view plant');
        $roleStaff = givePermissionTo('create user');
        $roleStaff = givePermissionTo('edit user');
        $roleStaff = givePermissionTo('delete user');
        $roleStaff = givePermissionTo('view user');

        $roleStudent = Role::create(['name'=>'student']);
        $roleStudent = givePermissionTo('create mother');
        $roleStudent = givePermissionTo('edit mother');
        $roleStudent = givePermissionTo('delete mother');
        $roleStudent = givePermissionTo('view mother');
        $roleStudent = givePermissionTo('create pest-disease');
        $roleStudent = givePermissionTo('edit pest-disease');
        $roleStudent = givePermissionTo('delete pest-disease');
        $roleStudent = givePermissionTo('view pest-disease');
        $roleStudent = givePermissionTo('create plant');
        $roleStudent = givePermissionTo('edit plant');
        $roleStudent = givePermissionTo('delete plant');
        $roleStudent = givePermissionTo('view plant');

        // demo user creation
        /*
        $user = \App\Models\User::factory()->create([
            'name' => 'Example Staff',
            'email' => 'staff@example.com',
            'password' => 'Staff123'
        ]);
        $user -> assignRole($roleStaff);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Student',
            'email' => 'student@example.com',
            'password' => 'Student123'
        ]);
        $user -> assignRole($roleStudent);
        */
    }
}
