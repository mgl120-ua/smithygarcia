<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class JvSinteticoController extends Controller
{
    //
    public function index()
    {
        $estandar = Product::where('description', 'Estandar')->get();
        $ignifugo = Product::where('description', 'Ignifugo')->get();

        return view('products.jvSintetico', [
            'estandar' => $estandar,
            'ignifugo' => $ignifugo
        ]);
    }
}
