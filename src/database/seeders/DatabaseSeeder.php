<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\TemporaryOrder;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(12)
        ->hasProducts(20)
        ->create();
        $this->call([
            OrderSeeder::class,
        ]);
    }
}
