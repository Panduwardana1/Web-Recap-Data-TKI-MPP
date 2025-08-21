<?php

namespace Database\Seeders;

use App\Models\Compani;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compani::factory()->count(3)->create();
    }
}
