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
        Schema::create('Livro_Autor', function (Blueprint $table) {
            $table->unsignedBigInteger('Livro_Codl');
            $table->unsignedBigInteger('Autor_CodAu');

            $table->foreign('Livro_Codl')
                ->references('Id')->on('Livro')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Autor_CodAu')
               ->references('CodAu')->on('Autor')
               ->onDelete('no action')
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
        Schema::dropIfExists('Livro_Autor');
    }
};
