<?php


namespace App\Service;


use App\Http\Requests\LivroRequest;
use App\Interface\LivroInterface;
use App\Models\Livro;
use App\Models\LivroAutor;
use App\Trait\Response;
use Illuminate\Support\Facades\DB;

class LivroService implements LivroInterface
{

    use Response;

    public function getAll()
    {
        try {
            $Livro = Livro::all();
            return $this->success("Listagem de Livros", $Livro);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


    public function save($request)
    {
        DB::beginTransaction();
        try {
            $Livro = new Livro();
            $Livro->Titulo = $request->Titulo;
            $Livro->Editora = $request->Editora;
            $Livro->Edicao = $request->Edicao;
            $Livro->AnoPublicacao = $request->AnoPublicacao;
            $Livro->Valor = $request->Valor;
            $Livro->save();

            $LivroAutor = new LivroAutor();
            $LivroAutor->Livro_Codl = $Livro->id;
            $LivroAutor->save();

            DB::commit();
            return $this->success(
                 "Livro Criado com sucesso",
                $Livro,
                 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), 404);
        }

    }

    public function update(LivroRequest $request, $id)
    {
        try {
            $Livro = Livro::findorFail($id);
            if (!$Livro) return $this->error("Não Existe o Livro para ser atualizado", 404);
            $Livro->update($request->all());
            return $this->success(
                "Livro Atualizado com sucesso",
                $Livro,
                200);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


   public function destroy($id)
   {
       try {
           $Livro = Livro::where('id',$id);
           if (!$Livro) return $this->error("Não Existe o Livro $id", 404);
           $Livro->delete();
           return $this->success("Livro deletado com Sucesso", $Livro);
       } catch (\Exception $e) {
           return $this->error($e->getMessage(), $e->getCode());
       }
   }




}
