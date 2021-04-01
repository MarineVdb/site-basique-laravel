<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('fr_FR');

        DB::table('produit')->insert([
            'nom' => 'Doudou Lapin',
            'description' => "Le Doudou Lapin Bonbon de Doudou et Compagnie sera ",
            'prix' => 19.90,
            'actif' => true,
            'categorie_id' => 1,
            'marque_id' => 1,
            'quantite' => 30,
            'taille_vetement_id' => 1,
            'dimension_largeur' => 10,
            'dimension_longueur' => null,
            'dimension_hauteur' => 20,
            'poids' => 0.3,
            'solde_pourcentage' => 0,
        ]);

        for($i=0; $i<100;$i++){
            $mots_produit = random_int(1, 3);

            if (random_int(1,10) <= 2) {
                $actif = false; //cas 2/10
            } else {
                $actif = true; //cas 8/10
            }

            if (random_int(1,10) <= 3) {
                $dimensionLongueur = $faker->randomFloat(2, 0, 5); //cas 3/10
            } else {
                $dimensionLongueur = null; //cas 7/10
            }

            if (random_int(1,10) <= 4) {
                $description = $faker->paragraph(3); //cas 4/10
            } else {
                $description = null; //cas 6/10
            }

            DB::table('produit')->insert([
                'nom' => $faker->words($mots_produit, true),
                'description' => $description,
                'prix' => $faker->randomFloat(2, 0, 100),
                'actif' => $actif,
                'quantite' => random_int(0, 10),
                'dimension_largeur' => $faker->randomFloat(2, 0, 5),
                'dimension_longueur' => $dimensionLongueur,
                'dimension_hauteur' => $faker->randomFloat(2, 0, 5),
                'poids' => $faker->randomFloat(1, 0.1, 10),
                'solde_pourcentage' => 0,
                'marque_id' => 1,
                'categorie_id' => random_int(1, 10),
                'taille_vetement_id' => 1,

            ]);
    }
}
}
