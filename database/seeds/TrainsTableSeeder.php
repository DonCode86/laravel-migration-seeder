<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            //tutte le colonne
            $newTrain->azienda ='boolean';
            $newTrain->Stazione_di_partenza =$faker->city();
            $newTrain->Stazione_di_arrivo =$faker->city();
            $newTrain->Orario_di_partenza =$faker->dateTimeInInterval('-1 week', '+3 days');
            $newTrain->Orario_di_arrivo =$faker->dateTimeInInterval('-1 week', '+3 days');
            $newTrain->Codice_Treno =$faker->numberBetween(0, 1000);
            $newTrain->Numero_Carrozze =$faker->numberBetween(0, 30);
            $newTrain->In_orario = true;
            $newTrain->Cancellato = false;
            $newTrain->save();
        }
    }
}
