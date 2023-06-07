<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::truncate();
        Role::truncate();
        
        Permission::create(['name' => 'add-products']);

        $adminRole = Role::create(['name' => 'Admin']);

        $adminRole->givePermissionTo([
            'add-products',
        ]);
    }
}
