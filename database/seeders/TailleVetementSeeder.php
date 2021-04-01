<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;


class TailleVetementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');

        DB::table('taille_vetement')->insert([
            'nom' => 'M',
            'created_at' => $faker->dateTimeBetween('-5 year', '-1 month')->format('Y-m-d H:i:s'),
        ]);

        for($i=0; $i<10;$i++){
            $mots_vetement = random_int(1, 3);

            DB::table('taille_vetement')->insert([
                'nom' => $faker->words($mots_vetement, true),
                'created_at' => $faker->dateTimeBetween('-5 year', '-1 month')->format('Y-m-d H:i:s'),
            ]);
        }  
    }
}
