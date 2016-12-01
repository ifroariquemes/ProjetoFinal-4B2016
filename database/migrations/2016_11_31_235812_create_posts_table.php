<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->string('resumo');
            $table->string('texto_completo', 8192);
            $table->boolean('ativo');
            $table->timestamps();
            $table->integer('autor_id')->unsigned();
            $table->integer('revisor_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('users');
            $table->foreign('revisor_id')->references('id')->on('users');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
