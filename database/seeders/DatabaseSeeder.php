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
       // \App\Models\User::factory(50)->create();
      //  \App\Models\Category::factory(20)->create();
        //  \App\Models\Product::factory(100)->create();
       //  \App\Models\Order::factory(100)->create();
         \App\Models\OrderDetail::factory(100)->create();

    }
}
