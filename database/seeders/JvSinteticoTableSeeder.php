<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\JvSintetico;

class JvSinteticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jvsintetico')->delete();
        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Estandar',
                'price' => 70,
                'img' => '/img/jvSintetico/1.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Estandar',
                'price' => 70,
                'img' => '/img/jvSintetico/2.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Estandar',
                'price' => 70,
                'img' => '/img/jvSintetico/3.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Estandar',
                'price' => 70,
                'img' => '/img/jvSintetico/4.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Ignifugo',
                'price' => 120,
                'img' => '/img/jvSintetico/1.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Ignifugo',
                'price' => 120,
                'img' => '/img/jvSintetico/2.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Ignifugo',
                'price' => 120,
                'img' => '/img/jvSintetico/3.jpg',
            ]
        );
        $jvsintetico->save();

        $jvsintetico = new JvSintetico(
            [
                'name' => 'Nombre',
                'category' => 'Ignifugo',
                'price' => 120,
                'img' => '/img/jvSintetico/4.jpg',
            ]
        );
        $jvsintetico->save();
    }
}
