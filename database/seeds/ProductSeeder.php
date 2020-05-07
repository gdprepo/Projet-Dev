<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => "Calecon vert a point rose",
            'description' => "description du calecon",
            'image' => "/images/calecon.jpg",
        ]);

        DB::table('products')->insert([
            'title' => "Pantalon....",
            'description' => "description du pantalon",
            'image' => "/images/pantalon.jpg",
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '2',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '1',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '2',
        ]);
    }
}
