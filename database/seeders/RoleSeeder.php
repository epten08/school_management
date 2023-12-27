<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder{
    public function run()
    {
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'admin']);
        
    }
}