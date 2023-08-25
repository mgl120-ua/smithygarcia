<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function hosteleria()
    {
        $hosteleriaProjects = Project::where('name', 'Hosteleria');
        return view('inspirate.hosteleria', ['projects' => $hosteleriaProjects]);
    }

    public function oficina()
    {
        $oficinasProjects = Project::where('name', 'Oficinas');
        return view('inspirate.oficinas', ['projects' => $oficinasProjects]);
    }

    public function salasEspera()
    {
        $salasEsperaProjects = Project::where('name', 'Salas de espera');
        return view('inspirate.salas-espera', ['projects' => $salasEsperaProjects]);
    }

    public function zonasComunes()
    {
        $zonasComunesProjects = Project::where('name', 'Zonas comunes');
        return view('inspirate.zonas-comunes', ['projects' => $zonasComunesProjects]);
    }
}
