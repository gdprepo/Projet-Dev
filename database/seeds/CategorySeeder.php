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
            'image' => "/images/calecon.jpg",
        ]);

        DB::table('categories')->insert([
            'title' => "Pantalon",
            'image' => "/images/pantalon.jpg",
        ]);
    }
}
