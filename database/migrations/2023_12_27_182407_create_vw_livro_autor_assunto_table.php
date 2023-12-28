<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE VIEW vw_livro_autor_assunto AS
            SELECT
                a2.Descricao as Assunto,
                a.Nome as Nome_Autor,
                l.Titulo,
                l.Editora,
                l.Edicao,
                l.AnoPublicacao,
                l.Valor
            from
                Livro l
            left join Livro_Autor la ON
                l.Id = la.Livro_Codl
            left join Autor a on
                la.Autor_CodAu = a.CodAu
            left join Livro_Assunto la2 on
                l.Id = la2.Livro_Codl
            left join Assunto a2 on
                la2.Assunto_codAs = a2.CodAs
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vw_livro_autor_assunto');
    }
};
