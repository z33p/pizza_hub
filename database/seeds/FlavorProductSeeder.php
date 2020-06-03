<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlavorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flavor_product')->insert(['flavor_id' => 1, 'product_id' => 1]);
        DB::table('flavor_product')->insert(['flavor_id' => 1, 'product_id' => 2]);
    }
}
