<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * create TrainsSeeder class
 * @author FRANCESCO CIMINO
 */
class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();
        $newTrain->agency = $faker->randomElement(['Train Agency 1', 'Train Agency 2', 'Train Agency 3']);
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+3 days');
        $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, '+20 hour');
        $newTrain->number_carriages = $faker->numberBetween(3, 33);
        $newTrain->train_code = $faker->randomNumber(9, true);
        $newTrain->in_time = $faker->numberBetween(0, 1);
        $newTrain->deleted = $faker->numberBetween(0, 1);
        $newTrain->save();
    }
}
