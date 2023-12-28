<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'Autor';
    public $timestamps = false;

    protected $fillable =[
        'Nome'
    ];


}
