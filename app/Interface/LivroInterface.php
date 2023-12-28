<?php
namespace App\Interface;

use App\Http\Requests\LivroRequest;

interface LivroInterface
{

    public function getAll();
    public function update(LivroRequest $request, $id);
    public function save(LivroRequest $request);
    public function destroy($id);

}
