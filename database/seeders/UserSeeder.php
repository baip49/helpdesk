<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Baip',
            'email' => 'baip@baip.com',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
        ]);
    }
}
