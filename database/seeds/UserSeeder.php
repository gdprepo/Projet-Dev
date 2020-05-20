<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "user-test",
            'email' => "gabindepaire@gmail.com",
            'password' => Hash::make('password'),
            'image' => "https://image.flaticon.com/icons/png/512/145/145867.png",
            'role' => "user"
        ]);

        DB::table('users')->insert([
            'name' => "admin-test",
            'email' => "admin@mail.com",
            'password' => Hash::make('password'),
            'image' => "https://image.flaticon.com/icons/png/512/149/149071.png",
            'role' => "admin"
        ]);

        DB::table('users')->insert([
            'name' => "Pseudo_User",
            'email' => "utilisateur@gmail.com",
            'password' => Hash::make('password'),
            'image' => "https://a-static.besthdwallpaper.com/northern-lights-green-aurora-borealis-wallpaper-3000x2000-1109_42.jpg",
            'role' => "user"
        ]);
    }
}
