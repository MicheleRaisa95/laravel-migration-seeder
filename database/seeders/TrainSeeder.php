<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('it_IT');
        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'orario_arrivo' => $faker->dateTimeBetween('+1 hour', '+6 hours'),
                'codice_treno' => $faker->regexify('[A-Z]{1}[0-9]{5}'),
                'numero_carrozze' => $faker->numberBetween(3, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}


