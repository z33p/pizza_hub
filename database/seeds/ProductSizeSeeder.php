<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size')->insert(['size_id' => 1, 'product_id' => 1]);
        DB::table('product_size')->insert(['size_id' => 1, 'product_id' => 2]);
    }
}
