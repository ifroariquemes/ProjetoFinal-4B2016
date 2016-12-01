<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {   
        DB::table('categorias')->insert([
            'categoria' => 'League of Legends',
            'created_at' => $date = date('Y-m-d H:i:s'),
            'updated_at' => $date = date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Dota 2',
            'created_at' => $date = date('Y-m-d H:i:s'),
            'updated_at' => $date = date('Y-m-d H:i:s'),
        ]);
    }
}
