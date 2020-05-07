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
            'image' => Str::random(10),
        ]);

        DB::table('categories')->insert([
            'title' => "Pantalon",
            'image' => "/images/calecon.jpg",
        ]);
    }
}
