<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LivroAssunto extends Model
{
    protected $table = 'Livro_Assunto';
    public $timestamps = false;


    public function livro()
    {
        return $this->hasMany(Livro::class, 'Livro_Codl', 'Id');
    }
    public function assunto()
    {
        return $this->hasMany(Livro::class, 'Assunto_codAs', 'CodAs');
    }
}
