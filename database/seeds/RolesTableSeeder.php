<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMINISTRATOR
        $role = Role::create(['name' => 'administrator']);$role->givePermissionTo(
            'inscription',
            'edit_profile'
        );
        //STUDENT
        $role = Role::create(['name' => 'student']);$role->givePermissionTo(
        'inscription',
        'edit_profile'
        );
        //STUDENT
        $role = Role::create(['name' => 'teacher']);$role->givePermissionTo(
        'edit_profile'
        );
        $role = Role::create(['name' => 'supervisor']);$role->givePermissionTo(
            'edit_profile'
        );
        //AUTHENTICATED
        $role = Role::create(['name' => 'authenticated']);$role->givePermissionTo(
            'inscription',
            'edit_profile'
        );
    }
}
