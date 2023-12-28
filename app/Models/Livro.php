<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'Livro';
    public $timestamps = false;

    protected $fillable = [
        'Titulo',
        'Editora',
        'Edicao',
        'AnoPublicacao',
        'Valor'
    ];

}
