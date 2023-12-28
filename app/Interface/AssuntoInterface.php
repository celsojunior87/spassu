<?php
namespace App\Interface;

use App\Http\Requests\AssuntoRequest;

interface AssuntoInterface
{

    public function getAll();
    public function update(AssuntoRequest $request, $id);
    public function save(AssuntoRequest $request);
    public function destroy($id);

}
