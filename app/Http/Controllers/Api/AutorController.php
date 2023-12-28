<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Requests\AutorRequest;
use App\Interface\AutorInterface;

class AutorController extends Controller
{
    public function __construct(AutorInterface $autor)
    {
        $this->autor = $autor;
    }

    public function getAll()
    {
        return $this->autor->getAll();
    }

    public function store(AutorRequest $request)
    {
        return $this->autor->save($request);
    }

    public function update(AutorRequest $request, $id)
    {
        return $this->autor->update($request,$id);

    }

    public function destroy($id)
    {
        return $this->autor->destroy($id);
    }
}
