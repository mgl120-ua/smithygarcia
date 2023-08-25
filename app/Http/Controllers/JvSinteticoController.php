<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JvSintetico;

class JvSinteticoController extends Controller
{
    //
    public function index()
    {
        $estandar = JvSintetico::where('category', 'Estandar')->get();
        $ignifugo = JvSintetico::where('category', 'Ignifugo')->get();

        return view('products.jvSintetico', [
            'estandar' => $estandar,
            'ignifugo' => $ignifugo
        ]);
    }
}
