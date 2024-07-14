<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Super Admin',
            'Viewer',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $suAdminPermissions = Permission::all();
        $suAdminRole = Role::findByName('Super Admin');
        $suAdminRole->givePermissionTo($suAdminPermissions);

        $viewerPermissions = ['read'];
        $viewerRole = Role::findByName('Viewer');
        $viewerRole->givePermissionTo($viewerPermissions);
    }
}
