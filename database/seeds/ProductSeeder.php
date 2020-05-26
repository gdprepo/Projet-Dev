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

        DB::table('products')->insert([
            'title' => "Tee shirt coeur",
            'description' => "description du tee shirt",
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_pHCX3auvqvMllEhcwIB5zvO21GGsg4_w1DzsGA-H-uwq_mIgE4lv0r3iaO2AkQbGV26y3EE&usqp=CAc",
            'prix' => '30'
        ]);

        DB::table('products')->insert([
            'title' => "Tee shirt blanc",
            'description' => "description du tee shirt",
            'image' => "https://www.destockjeans.fr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/4/141_2.jpg",
            'prix' => '30'
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '1',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '2',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '4',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '2',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '4',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '3',
            'category_id' => '4',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '3',
            'category_id' => '5',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '4',
            'category_id' => '3',
        ]);

        DB::table('category_product')->insert([
            'product_id' => '4',
            'category_id' => '5',
        ]);

    }
}
