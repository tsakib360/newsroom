<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mr. Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('123456'),
            'role' => ADMIN_ROLE,
        ]);
    }
}
