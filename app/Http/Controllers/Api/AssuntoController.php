<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Requests\AssuntoRequest;
use App\Interface\AssuntoInterface;


class AssuntoController extends Controller
{
    public function __construct(AssuntoInterface $assunto)
    {
        $this->assunto = $assunto;
    }

    public function getAll()
    {
        return $this->assunto->getAll();
    }

    public function store(AssuntoRequest $request)
    {
        return $this->assunto->save($request);
    }

    public function update(AssuntoRequest $request, $id)
    {
        return $this->assunto->update($request,$id);

    }

    public function destroy($id)
    {
        return $this->autor->destroy($id);
    }

}
