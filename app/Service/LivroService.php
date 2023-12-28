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
            $livro = Livro::all();
            return $this->success("Listagem de Livros", $livro);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


    public function save($request)
    {
        DB::beginTransaction();
        try {
            $livro = new Livro();
            $livro->Titulo = $request->Titulo;
            $livro->Editora = $request->Editora;
            $livro->Edicao = $request->Edicao;
            $livro->AnoPublicacao = $request->AnoPublicacao;
            $livro->Valor = $request->Valor;
            $livro->save();

            $LivroAutor = new LivroAutor();
            $LivroAutor->Livro_Codl = $livro->id;
            $LivroAutor->save();

            DB::commit();
            return $this->success(
                 "Livro Criado com sucesso",
                 $livro,
                 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), 404);
        }

    }

    public function update(LivroRequest $request, $id)
    {
        try {
            $livro = Livro::findOrFail($id);
            if (!$livro) return $this->error("Não Existe o Livro para ser atualizado", 404);
            return $livro->update($request->all());
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 404);
        }
    }


   public function destroy($id)
   {
       try {
           $livro = Livro::where('id',$id);
           if (!$livro) return $this->error("Não Existe o Livro $id", 404);
           $livro->delete();
           return $this->success("Livro deletado com Sucesso", $livro);
       } catch (\Exception $e) {
           return $this->error($e->getMessage(), $e->getCode());
       }
   }




}
