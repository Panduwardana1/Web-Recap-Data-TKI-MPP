<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $destination = [
        //     ['country_name' => 'Malaysia'],
        //     ['country_name' => 'Taiwan'],
        //     ['country_name' => 'Singapura'],
        //     ['country_name' => 'Brunai Darusalam'],
        // ];

        // foreach ($destination as $dest) {
        //     Destination::updateOrCreate(
        //         ['country_name' => $dest['country_name']],
        //         $dest
        //     );
        // };

        Destination::factory()->count(100)->create();

    }
}
