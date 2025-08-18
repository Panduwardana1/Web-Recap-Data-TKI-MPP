<?php

namespace Database\Factories;

use App\Models\Tki;
use App\Models\Compani;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tki>
 */
class TkiFactory extends Factory
{
        protected $model = Tki::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nik' => $this->faker->unique()->numerify('52020###########'),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'place_of_birth' => $this->faker->city(),
            'date_of_birth' => $this->faker->date(),
            'address_vilage' => $this->faker->streetName(),
            'district' => $this->faker->citySuffix(),
            'education' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'SLTP', 'SLTA']),
            'phone' => $this->faker->phoneNumber('085'),
            'compani_id' => Compani::inRandomOrder()->value('id'),
            'destination_id' => Destination::inRandomOrder()->value('id')

        ];
    }
}
