<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
        	$texto = $faker->text($maxNbChars = 400);
        	Post::create([
        		'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            	'resumo' => substr($texto, 0, 230) . "...",
            	'texto_completo' => $texto,
            	'ativo' => 1,
            	'autor_id' => 1,
            	'revisor_id' => 1,
        		'categoria_id' => 1,
        	]);
        }

        foreach (range(1, 15) as $i) {
        	$texto = $faker->text($maxNbChars = 400);
        	Post::create([
        		'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            	'resumo' => substr($texto, 0, 230) . "...",
            	'texto_completo' => $texto,
            	'ativo' => 1,
            	'autor_id' => 1,
            	'revisor_id' => 1,
        		'categoria_id' => 2,
        	]);
        }
    }
}
