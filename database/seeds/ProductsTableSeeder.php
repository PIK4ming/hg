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
        factory(\App\Models\Product::class, 30)->create()->each(function($product){
            $product->storages()->save(factory(\App\Models\Storage::class)->state('formProduct')->make([
                'product_name' => $product->name
            ]));
        });
    }
}
