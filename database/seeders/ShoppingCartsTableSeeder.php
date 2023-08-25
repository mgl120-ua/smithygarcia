<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShoppingCart;

class ShoppingCartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShoppingCart::create([
            'created_at' => now(),
            'status' => 'Abierto',
            'user_id' => 1,  // Si tienes autenticación de usuarios
        ]);
    }
}
