<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB:table
        DB::table('pizzas')-> insert([
            ['name' => 'Margarita', 'type' => 'Original','ingredients' => 'Extra cheese', 'size' => 'small'],
            ['name' => 'Barbacoa', 'type' => 'Deluxe', 'ingredients' => 'Extra cheese', 'size' => 'medium'],
        ]);
    }
}
