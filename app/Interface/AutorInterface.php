<?php
namespace App\Interface;

use App\Http\Requests\AutorRequest;

interface AutorInterface
{

    public function getAll();
    public function update(AutorRequest $request, $id);
    public function save(AutorRequest $request);
    public function destroy($id);

}
