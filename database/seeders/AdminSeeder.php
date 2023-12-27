<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder{
    public function run()
    {
       User::create([
            'name' => 'admin',
            'email' => 'admin@marist.com',
            'email_verified_at' => now(),
            'password' => 'secret', // password
        ])->assignRole('staff', 'admin');
    }
}