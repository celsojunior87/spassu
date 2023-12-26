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
        Schema::create('Livro_Assunto', function (Blueprint $table) {
            $table->unsignedBigInteger('Livro_Codl');
            $table->unsignedBigInteger('Assunto_codAs');

            $table->foreign('Livro_Codl')
                ->references('Id')->on('Livro')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('Assunto_codAs')
                ->references('CodAs')->on('Assunto')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Livro_Assunto');
    }
};
