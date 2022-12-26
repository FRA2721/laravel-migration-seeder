<?php

namespace Database\Seeders;

use App\Models\Train;
use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     * my seeder
     * @return void
     */
    public function run()
    {
       $trainsData = Helpers::getCsvData(__DIR__ . '/trains.csv');
       // dd($trainsData); 
       foreach ($trainsData as $key => $train) {

        if ($key !== 0) { //to skip the first value (0) 
            $newTrain = new Train();
            $newTrain->agency = $train[0];
            $newTrain->departure_station = $train[1];
            $newTrain->arrival_station = $train[2];
            $newTrain->departure_time = $train[3];
            $newTrain->arrival_time = $train[4];
            $newTrain->train_code = $train[5];
            $newTrain->number_carriages = $train[6];
            $newTrain->in_time = $train[7];
            $newTrain->deleted = $train[8];
            $newTrain->save();
            }

        }
    }
}
