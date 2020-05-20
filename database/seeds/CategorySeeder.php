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
    }
}
