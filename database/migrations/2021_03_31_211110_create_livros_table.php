<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id_livro');
            $table->string('titulo')->unique();
            $table->string('isbn');
            $table->string('edicao');
            $table->longText('sinopse');
            $table->year('ano');
            $table->bigInteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id_autor')->on('autors');
            $table->bigInteger('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id_genero')->on('generos');
            $table->bigInteger('registado_por')->unsigned();
            $table->foreign('registado_por')->references('id')->on('users');
            $table->bigInteger('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id_idioma')->on('idiomas');
            $table->bigInteger('editora_id')->unsigned();
            $table->foreign('editora_id')->references('id_editora')->on('editoras');
            $table->timestamps();

            /*
            $table->bigInteger('')->unsigned();
            $table->foreign('')->references('')->on('');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
