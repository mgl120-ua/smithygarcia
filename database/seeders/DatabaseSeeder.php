<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ShoppingcartsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        /*$this->call(PanelsTableSeeder::class);
        $this->call(JvSinteticoTableSeeder::class);
        $this->call(JvNaturalTableSeeder::class);*/
    }
}
