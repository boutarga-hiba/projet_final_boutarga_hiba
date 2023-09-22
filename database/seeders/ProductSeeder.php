<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            "name" => "chaise plastique",
            "description" => "plastique fort confortable",
            "prix" => 370,
            "stock" => 10,
            "image" => "plastique1.jpg",
            "categorie_id" => 1,
        ]);


        Product::create([
            "name" => "chaise plastique",
            "description" => "plastique fort confortable",
            "prix" => 230,
            "stock" => 10,
            "image" => "plastique2.jpg",
            "categorie_id" => 1,
        ]);

        Product::create([
            "name" => "chaise plastique",
            "description" => "plastique fort confortable",
            "prix" => 260,
            "stock" => 10,
            "image" => "plastique3.jpg",
            "categorie_id" => 1,
        ]);

        Product::create([
            "name" => "chaise plastique",
            "description" => "plastique fort confortable",
            "prix" => 250,
            "stock" => 10,
            "image" => "plastique4.jpg",
            "categorie_id" => 1,
        ]);



        //* feuetille
        Product::create([
            "name" => "feuteille gris",
            "description" => "fauteille confortable",
            "prix" => 400,
            "stock" => 10,
            "image" => "fauteille1.jpg",
            "categorie_id" => 2,
        ]);

        Product::create([
            "name" => "feuteille rouge gris",
            "description" => "fauteille confortable",
            "prix" => 500,
            "stock" => 3,
            "image" => "fauteille2.jpg",
            "categorie_id" => 2,
        ]);

        Product::create([
            "name" => "feuteille papillon",
            "description" => "fauteille confortable",
            "prix" => 800,
            "stock" => 8,
            "image" => "fauteille6.jpg",
            "categorie_id" => 2,
        ]);

        Product::create([
            "name" => "feuteille grand",
            "description" => "fauteille confortable",
            "prix" => 460,
            "stock" => 3,
            "image" => "fauteille7.jpg",
            "categorie_id" => 2,
        ]);

        // * bois

        Product::create([
            "name" => "chaise bois",
            "description" => "chaise bois naturel 20%",
            "prix" => 490,
            "stock" => 8,
            "image" => "bois1.jpg",
            "categorie_id" => 3,
        ]);

        Product::create([
            "name" => "chaise bois",
            "description" => "chaise bois naturel 100%",
            "prix" => 490,
            "stock" => 9,
            "image" => "bois2.jpg",
            "categorie_id" => 3,
        ]);

        Product::create([
            "name" => "chaise bois",
            "description" => "chaise bois naturel 80%",
            "prix" => 490,
            "stock" => 2,
            "image" => "bois3.jpg",
            "categorie_id" => 3,
        ]);

        Product::create([
            "name" => "chaise bois",
            "description" => "chaise bois naturel 50%",
            "prix" => 420,
            "stock" => 9,
            "image" => "bois4.jpg",
            "categorie_id" => 3,
        ]);
    }
}
