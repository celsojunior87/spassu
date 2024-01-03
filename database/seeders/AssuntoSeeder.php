<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssuntoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Assunto')->insert([
            'Descricao' => 'Julgamento',
        ]);
        DB::table('Assunto')->insert([
            'Descricao' => 'Sobrevivência',
        ]);
        DB::table('Assunto')->insert([
            'Descricao' => 'Amor',
        ]);
    }
}
