<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'sector' => 'System Admin',
            'actived' => true,
            'access_level' => 0,
        ]);
    }
}
