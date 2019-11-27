<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Product::create([
            'product_name' => 'phone',
            'product_title' => 'gggggg',
            'uid' => 1,
            'product_slug' => 'ddddd',
            'product_posted_by' => 'admin'
        ]);
        \App\Models\Product::create([
            'product_name' => 'mac',
            'product_title' => 'gggggg',
            'uid' => 1,
            'product_slug' => 'ggim',
            'product_posted_by' => 'admin'
        ]);

    }
}
