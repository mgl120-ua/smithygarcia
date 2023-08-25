<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panels;

class PanelsController extends Controller
{
    //
    public function index()
    {
        $foamPanels = Panels::where('category', 'Foam')->get();
        $petPanels = Panels::where('category', 'Pet')->get();
        $mobiliarioPanels = Panels::where('category', 'Mobiliario')->get();

        return view('products.panels', [
            'foamPanels' => $foamPanels,
            'petPanels' => $petPanels,
            'mobiliarioPanels' => $mobiliarioPanels,
        ]);
    }

    public function newProductPost(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|mimes:jpeg,jpg,png|max:10240',
            ]
        );

        $imageName = $request->image->getClientOriginalName();
        $imageRoute = "/img/" . $imageName;
        $request->image->move(public_path('img'), $imageName);
        $name = $request->name;
        $price = $request->price;

        $product = Product::create(
            [
                'name' => $name,
                'price' => $price,
                'img' => $imageRoute,
            ]
        );
        $product->save();
        $product->category()->associate($category);
        $product->save();
        session()->flash('message', 'Producto añadido correctamente');
        return redirect()->action([ProductController::class, 'index']);
    }

    /*public function updateProductGet($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('product.update', ['product' => $product], compact('categories', 'genres'));
    }*/


    public function updateProduct(Request $request, $id)
    {
        if ($request->has('name') && $request->has('price')) {
            $request->validate(
                    [
                        'name' => 'required',
                        'price' => 'required|numeric',
                        'image' => 'required|mimes:jpeg,jpg,png|max:10240',
                    ]
                );
            $imageName = $request->image->getClientOriginalName();
            $imageRoute = "/img/" . $imageName;
            $request->image->move(public_path('img'), $imageName);
            $name = $request->name;
            $price = $request->price;
            $category = Category::where('name', '=', $request->category)->first();

            $product = Product::findOrFail($id);
            $product->name = $name;
            $product->price = $price;
            $product->img = $imageRoute;
            $product->save();
            $product->category()->associate($category);
            $product->save();
            session()->flash('message', 'Producto actualizado correctamente');
            return redirect()->action([ProductController::class, 'index']);
        }
    }


    public function deleteProduct($id)
    {
        // Esto estaría mejor cambiarlo a un atributo booleano en products
        $product = Product::findOrFail($id);
        if ($product->ordered) {
            return redirect()->back()->withErrors("Este producto no puede ser eliminado, tiene productos que pertenecen a un pedido");
        } else {
            $product->delete();
            session()->flash('message', 'Producto eliminado correctamente');
            return redirect()->back();
        }
    }

}
