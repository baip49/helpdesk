<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Baip',
            'email' => 'baip@baip.com',
            'password' => Hash::make('123456789'),
        ]);
        $user->assignRole('admin');

        User::factory(10)->create();
    }
}
