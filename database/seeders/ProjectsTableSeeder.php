<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('projects')->delete();
        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria1.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria2.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria3.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria4.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria5.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria6.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria7.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria8.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria9.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/hosteleria10.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Hosteleria',
                'img' => '/img/inspirate/hosteleria/tienda.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Oficinas',
                'img' => '/img/inspirate/oficina/oficina.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Oficinas',
                'img' => '/img/inspirate/oficina/oficina2.JPG',
            ]
        );
        $propject->save();
        
        $propject = new Project(
            [
                'name' => 'Oficinas',
                'img' => '/img/inspirate/oficina/oficina3.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/sala-espera.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/sala-espera2.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/sala-espera3.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/sala-espera4.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/sala-espera5.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Salas de espera',
                'img' => '/img/inspirate/sala-espera/despacho.JPG',
            ]
        );
        $propject->save();


        $propject = new Project(
            [
                'name' => 'Zonas comunes',
                'img' => '/img/inspirate/zonas-comunes/zonas-comunes.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Zonas comunes',
                'img' => '/img/inspirate/zonas-comunes/zonas-comunes2.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Zonas comunes',
                'img' => '/img/inspirate/zonas-comunes/zonas-comunes3.JPG',
            ]
        );
        $propject->save();

        $propject = new Project(
            [
                'name' => 'Zonas comunes',
                'img' => '/img/inspirate/zonas-comunes/pasillo.JPG',
            ]
        );
        $propject->save();
    }
}
