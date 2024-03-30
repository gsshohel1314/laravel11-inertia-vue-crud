<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'                  => 'Admin',
            'email'                 => 'admin@gmail.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make(12345678)
        ]);

        User::create([
            'name'                  => 'User',
            'email'                 => 'user@gmail.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make(12345678)
        ]);
    }
}
