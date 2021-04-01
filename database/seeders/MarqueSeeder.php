<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');

        DB::table('marque')->insert([
            'nom' => 'Foo bar baz',
            'description' => null,
        ]);

        for($i=0; $i<10;$i++){
            $mots_marque = random_int(1, 3);

            DB::table('marque')->insert([
                'nom' => $faker->words($mots_marque, true),
                'description' => $faker->paragraph(3),
            ]);
        }  

    }
}
