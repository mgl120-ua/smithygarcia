<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product')->get();
        $cartTotal = CartItem::sum('subtotal');

        return view('cart', [
            'cartItems' => $cartItems,
            'cartTotal' => $cartTotal,
        ]);
    }

    public function remove($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart')->with('success', 'Producto eliminado del carrito');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->withErrors("Producto no encontrado");
        }

        $cart = Session::get('cart', []);

        // Si el producto ya está en el carrito, aumenta la cantidad
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'product' => $product,
                'quantity' => 1,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Producto añadido al carrito');
    }
}
