<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Livro', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Titulo',40);
            $table->string('Editora',40);
            $table->integer('Edicao');
            $table->string('AnoPublicacao',4);
            $table->string('Valor',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Livro');
    }
};
