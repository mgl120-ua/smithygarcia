<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'EcoLine',
            'description' => 'Foam',
            'price' => 29.99,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/foam/ecoLine.jpg',
        ]);

        Product::create([
            'name' => 'EcoRound',
            'description' => 'Foam',
            'price' => 29.99,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/foam/ecoRound.jpg',
        ]);

        Product::create([
            'name' => 'EcoSix',
            'description' => 'Foam',
            'price' => 29.99,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/foam/ecoSix.jpg',
        ]);

        Product::create([
            'name' => 'EcoLong',
            'description' => 'Foam',
            'price' => 29.99,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/foam/ecoLong.jpg',
        ]);

        Product::create([
            'name' => 'Personalizado',
            'description' => 'Foam',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/foam/personalizado.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Pet',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/pet/blanco.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Pet',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/pet/calro.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Pet',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/pet/gris.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Pet',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/pet/oscuro.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Pet',
            'price' => 0,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/pet/personalizado.jpg',
        ]);

        Product::create([
            'name' => 'Lampara',
            'description' => 'Mobiliario',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/muebles/ecoLine.jpg',
        ]);

        Product::create([
            'name' => 'Mesa',
            'description' => 'Mobiliario',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/muebles/mesa.jpg',
        ]);

        Product::create([
            'name' => 'Silla',
            'description' => 'Mobiliario',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/muebles/silla.jpg',
        ]);

        Product::create([
            'name' => 'Sofa',
            'description' => 'Mobiliario',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/muebles/sofa.jpg',
        ]);

        Product::create([
            'name' => 'Personalizado',
            'description' => 'Mobiliario',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Panel',
            'image' => '/img/paneles/muebles/personalizado.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Estandar',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/1.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Estandar',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/2.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Estandar',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/3.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Estandar',
            'price' => 70,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/4.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Ignifugo',
            'price' => 120,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/1.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Ignifugo',
            'price' => 120,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/2.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Ignifugo',
            'price' => 120,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/3.jpg',
        ]);

        Product::create([
            'name' => 'Nombre',
            'description' => 'Ignifugo',
            'price' => 120,
            'stock' => 50,
            'product_type' => 'Jardín Vertical Sintético',
            'image' => '/img/jvSintetico/4.jpg',
        ]);

    }
}
