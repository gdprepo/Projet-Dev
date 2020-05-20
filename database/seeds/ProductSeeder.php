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
            'image' => "https://cdn2.brucefield.com/60015-large_default/calecon-homme-100-coton-double-retors.jpg",
            'prix' => '20'
        ]);

        DB::table('products')->insert([
            'title' => "Pantalon....",
            'description' => "description du pantalon",
            'image' => "https://d1fufvy4xao6k9.cloudfront.net/feed/img/man_pants/3658/front_crop_small.png",
            'prix' => '20'
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '1',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '2',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '2',
        ]);
    }
}
