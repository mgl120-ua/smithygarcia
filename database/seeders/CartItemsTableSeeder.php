<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;

class CartItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartItems = [
            [
                'cart_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'subtotal' => 2 * 29.99, // Cantidad * Precio del producto
            ],
        ];

        foreach ($cartItems as $item) {
            CartItem::create($item);
        }
    }
}
