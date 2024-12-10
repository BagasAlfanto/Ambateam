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
        if (User::count() > 0) return;

        User::factory()->count(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);
    }
}
