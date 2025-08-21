<?php

namespace Database\Seeders;

use App\Models\Tki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tki::factory()->count(14902)->create();
    }
}
