<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 20; $i++) {
            $trains = new Train();

            $trains->company = $faker->company();

            $trains->departure_station = $faker->city();
            $trains->arrival_station = $faker->city();
            while ($trains -> departure_station === $trains -> arrival_station) {
                $trains->arrival_station = $faker->city();
            }

            $trains->departure_time = $faker->dateTimeBetween('-1 days', '+3 days');
            $trains->arrival_time = Carbon::parse($trains->departure_time)->addHours(rand(1, 15));

            $trains->train_number = $faker->unique()->bothify('??-#####');

            $trains->carriage_number = $faker->randomDigitNot(0);

            $trains->on_time = $faker->boolean();
            $trains->cancelled = $faker->boolean();

            $trains -> save();
        }
    }
}
