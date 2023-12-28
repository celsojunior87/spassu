<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('Autor')->insert([
            'Nome' => 'Machado de Assis',
        ]);
        DB::table('Autor')->insert([
            'Nome' => 'William Shakespeare',
        ]);
        DB::table('Autor')->insert([
            'Nome' => 'Luís de Camões',
        ]);
    }
}
