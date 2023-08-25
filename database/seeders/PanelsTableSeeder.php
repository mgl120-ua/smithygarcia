<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Panels;

class PanelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('panels')->delete();
        $panel = new Panels(
            [
                'name' => 'EcoLine',
                'category' => 'Foam',
                'price' => 70,
                'img' => '/img/paneles/foam/ecoLine.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'EcoRound',
                'category' => 'Foam',
                'price' => 70,
                'img' => '/img/paneles/foam/ecoRound.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'EcoSix',
                'category' => 'Foam',
                'price' => 70,
                'img' => '/img/paneles/foam/ecoSix.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'EcoLong',
                'category' => 'Foam',
                'price' => 70,
                'img' => '/img/paneles/foam/ecoLong.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Personalizado',
                'category' => 'Foam',
                'price' => 0,
                'img' => '/img/paneles/foam/personalizado.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Nombre',
                'category' => 'Pet',
                'price' => 70,
                'img' => '/img/paneles/pet/blanco.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Nombre',
                'category' => 'Pet',
                'price' => 70,
                'img' => '/img/paneles/pet/calro.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Nombre',
                'category' => 'Pet',
                'price' => 70,
                'img' => '/img/paneles/pet/gris.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Nombre',
                'category' => 'Pet',
                'price' => 70,
                'img' => '/img/paneles/pet/oscuro.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Nombre',
                'category' => 'Pet',
                'price' => 70,
                'img' => '/img/paneles/pet/personalizado.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Lampara',
                'category' => 'Mobiliario',
                'price' => 70,
                'img' => '/img/paneles/muebles/ecoLine.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Mesa',
                'category' => 'Mobiliario',
                'price' => 70,
                'img' => '/img/paneles/muebles/mesa.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Silla',
                'category' => 'Mobiliario',
                'price' => 70,
                'img' => '/img/paneles/muebles/silla.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Sofa',
                'category' => 'Mobiliario',
                'price' => 70,
                'img' => '/img/paneles/muebles/sofa.jpg',
            ]
        );
        $panel->save();

        $panel = new Panels(
            [
                'name' => 'Personalizado',
                'category' => 'Mobiliario',
                'price' => 70,
                'img' => '/img/paneles/muebles/personalizado.jpg',
            ]
        );
        $panel->save();
    }
}
