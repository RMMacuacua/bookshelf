<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImagensLivros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens_livros', function (Blueprint $table) {
            $table->bigIncrements('id_imagem');
            $table->string('name');
            $table->bigInteger('livro_id')->unsigned();
            $table->foreign('livro_id')->references('id_livro')->on('livros');
            $table->text('imagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('imagens_livros');
    }
}
