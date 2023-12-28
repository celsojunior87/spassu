<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LivroAutor extends Model
{
    protected $table = 'Livro_Autor';
    public $timestamps = false;


    public function livro()
    {
        return $this->hasMany(Livro::class, 'Livro_Codl', 'Id');
    }
    public function autor()
    {
        return $this->hasMany(Livro::class, 'CodAu', 'CodAu');
    }
}
