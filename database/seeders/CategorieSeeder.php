<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');
        
        //Catégories racines (6)
        DB::table('categorie')->insert([
            'nom' => 'Lorem Ipsum',
            'categorie' => null,
            'created_at' => $faker->dateTimeBetween('Y-m-d H:i:s'),   
        ]);

        for($i=0; $i<5;$i++){
            $mots_categorie = random_int(1, 3);

            DB::table('categorie')->insert([
                'nom' => $faker->words($mots_categorie, true),
                'categorie' => null,
                'created_at' => $faker->dateTimeBetween('-5 year', '-1 month')->format('Y-m-d H:i:s'),
            ]);
        }

        //Sous-catégories (19)

        for($i=0; $i<19;$i++){
            $mots_categorie = random_int(1, 3);

            DB::table('categorie')->insert([
                'nom' => $faker->words($mots_categorie, true),
                'categorie' => random_int(1,6),
                'created_at' => $faker->dateTimeBetween('-5 year', '-1 month')->format('Y-m-d H:i:s'),
            ]);
        }
    }
}


