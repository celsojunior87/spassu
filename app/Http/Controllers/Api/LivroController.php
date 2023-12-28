<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Requests\LivroRequest;
use App\Interface\LivroInterface;

class LivroController extends Controller
{
    public function __construct(LivroInterface $livros)
    {
        $this->livros = $livros;
    }

    /**
     * Retorna todos os livros do banco de dados
     * @return mixed
     */
    public function getAllLivros()
    {
        return $this->livros->getAll();
    }

    public function store(LivroRequest $request)
    {
        return $this->livros->save($request);
    }

    public function update(LivroRequest $request, $id)
    {
        return $this->livros->update($request,$id);

    }

    public function destroy($id)
    {
        return $this->livros->destroy($id);
    }


}
