<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('Livro')->insert([
            'Titulo' => 'Nunca é hora de Parar',
            'Editora' => 'Sextante',
            'Edicao' => 1,
            'AnoPublicacao' =>'2023',
            'Valor'=> 47.50
        ]);
    }
}
