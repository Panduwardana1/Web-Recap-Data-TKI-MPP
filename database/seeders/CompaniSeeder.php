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
        // $companis = [
        //     [
        //         'name' => 'PT. Blue Diamond',
        //         'address' => 'Batukliang',
        //         'phone' => '081234567890',
        //     ],
        //     [
        //         'name' => 'PT. New Comer',
        //         'address' => 'Praya Tengah',
        //         'phone' => '082345678901',
        //     ],

        // ];

        // foreach ($companis as $compani) {
        //     Compani::updateOrCreate(
        //         [
        //             'name' => $compani['name']
        //         ],
        //         $compani
        //     );
        // }

        Compani::factory()->count(100)->create();

    }
}
