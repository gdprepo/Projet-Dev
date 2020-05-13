<?php

use Illuminate\Database\Seeder;

class CommandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commands')->insert([
            'status' => "En cours",
            'date' => "10/10/2010",
            'prix' => "100",
            'user_id' => '3',
        ]);

        DB::table('command_product')->insert([
            'command_id' => '1',
            'product_id' => '1'
        ]);

        DB::table('command_product')->insert([
            'command_id' => '1',
            'product_id' => '2'
        ]);

        DB::table('command_product')->insert([
            'command_id' => '1',
            'product_id' => '3'
        ]);
    }
}
