<?php

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
        $this->call(UserSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FlavorSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(OrderProductSeeder::class);
        $this->call(FlavorProductSeeder::class);
        $this->call(ProductSizeSeeder::class);
    }
}
