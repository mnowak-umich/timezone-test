<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@test.com')->exists()) {
            User::create([
                'name' => 'Test',
                'email' => 'admin@test.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
