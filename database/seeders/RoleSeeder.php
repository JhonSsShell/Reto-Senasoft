<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::create(['name' => "superadministrador"]);
        $administrador = Role::create(['name' => "administrador"]);
        $cliente = Role::create(['name' => 'cliente']);

        
    }
}
