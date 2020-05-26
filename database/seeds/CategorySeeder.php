<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => "Sous Vetement",
            'image' => "https://cdn2.brucefield.com/60015-large_default/calecon-homme-100-coton-double-retors.jpg",
        ]);

        DB::table('categories')->insert([
            'title' => "Pantalon",
            'image' => "https://d1fufvy4xao6k9.cloudfront.net/feed/img/man_pants/3658/front_crop_small.png",
        ]);

        DB::table('categories')->insert([
            'title' => "Femme",
            'image' => "https://archziner.com/wp-content/uploads/2019/11/fashion-trends-woman-walking-down-the-street-wearing-leopard-print-dress-silver-boots-black-bag.jpg",
        ]);

        DB::table('categories')->insert([
            'title' => "Homme",
            'image' => "https://www.montpellierfashionweek.fr/bmz_cache/3/Peluche%20Blousons%20Cuir%20Moto%20pour%20Hommes%20Hiver%20Marque%20Slim%20Pu%20Cuir%202019%20Chocolat.image.700x700.jpg",
        ]);

        DB::table('categories')->insert([
            'title' => "Tee shirt",
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTo8McUL7OrFHqsFP6wdJBh0UXtQt5WgWu_kWBJxGuT70VQA6e&usqp=CAU",
        ]);
    }
}
