<?php

namespace Database\Seeders;

use App\Models\Modules;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Modules::count() > 0) return;

        Modules::factory()->count(10)->create();
    }
}
