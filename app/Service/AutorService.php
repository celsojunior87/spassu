<?php


namespace App\Service;


use App\Http\Requests\AutorRequest;
use App\Http\Requests\LivroRequest;
use App\Interface\AutorInterface;
use App\Interface\LivroInterface;
use App\Models\Autor;
use App\Models\Livro;
use App\Models\LivroAutor;
use App\Trait\Response;
use Illuminate\Support\Facades\DB;

class AutorService implements AutorInterface
{

    use Response;

    public function getAll()
    {
        try {
            $Autor = Autor::all();
            return $this->success("Listagem de Autores", $Autor);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


    public function save($request)
    {
        DB::beginTransaction();
        try {
            $Autor = new Autor();
            $Autor->Nome = $request->Nome;
            $Autor->save();

            $LivroAutor = new LivroAutor();
            $LivroAutor->Autor_CodAu = $Autor->id;
            $LivroAutor->save();

            DB::commit();
            return $this->success(
                 "Autor Criado com sucesso",
                 $Autor,
                 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), 404);
        }

    }

    public function update(AutorRequest $request, $id)
    {
        try {
            $Autor = Autor::where('CodAu',$id);
            if (!$Autor) return $this->error("Não existe Autor para ser atualizado", 404);
            $Autor->update($request->all());
            return $this->success(
                "Autor Atualizado com sucesso",
                $Autor,
                200);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


   public function destroy($id)
   {

   }




}
