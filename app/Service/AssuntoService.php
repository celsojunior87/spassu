<?php


namespace App\Service;


use App\Http\Requests\AssuntoRequest;
use App\Http\Requests\AutorRequest;

use App\Interface\AssuntoInterface;

use App\Models\Assunto;
use App\Models\Autor;
use App\Models\LivroAssunto;
use App\Models\LivroAutor;
use App\Trait\Response;
use Illuminate\Support\Facades\DB;

class AssuntoService implements AssuntoInterface
{

    use Response;

    public function getAll()
    {
        try {
            $Assunto = Assunto::all();
            return $this->success("Assunto dos Livros", $Assunto);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


    public function save($request)
    {
        DB::beginTransaction();
        try {
            $Assunto = new Assunto();
            $Assunto->Descricao = $request->Descricao;
            $Assunto->save();

            $LivroAssunto = new LivroAssunto();
            $LivroAssunto->Assunto_codAs = $Assunto->id;
            $LivroAssunto->save();

            DB::commit();
            return $this->success(
                 "Assunto Criado com sucesso",
                $Assunto,
                 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), 404);
        }

    }

    public function update(AssuntoRequest $request, $id)
    {
        try {
            $Assunto = Assunto::where('CodAs',$id);
            if (!$Assunto) return $this->error("Não existe Assunto para ser atualizado", 404);
            $Assunto->update($request->all());
            return $this->success(
                "Assunto Atualizado com sucesso",
                $Assunto,
                200);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


   public function destroy($id)
   {

   }




}
