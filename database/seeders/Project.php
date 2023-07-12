<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Type;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        
        for ($i = 0; $i < 10; $i++) {
            Type::create([
                'nome' => $faker->word,
            ]);
        }

        for ($i = 0; $i < 50; $i++) {
            \App\Models\Project::create([
                'nome' => $faker->word,
                'descrizione' => $faker->sentence,
                'tipo_id' => Type::inRandomOrder()->first()->id,
            ]);
        }
    }
}