<?php

namespace App\Http\Controllers;

use App\Http\Requests\veiculoRequest;
use App\Models\Dicas;
use App\Models\Veiculos;
use App\Service\listarPesquisa;
use App\Service\novoVeiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class veiculosController extends Controller
{
    //metodo que chama a pagina principal
    public function listarVeiculos(Request $request,listarPesquisa $pesquisa){
        //retorna todos os veiculos
        if($request->marca==null and $request->modelo==null and $request->versao==null) {
            $menu = 1;
            $lista=$pesquisa->listarAll();
        }
        //retorna somente a pesquisa por marca e modelo
        if(empty($request->versao) and isset($request->marca) and isset($request->modelo)){
            $menu=2;
            $lista=$pesquisa->listarMarcaModelo($request->modelo,$request->marca);
        }
        //retorna somente a pesquisa por modelo
        if(isset($request->modelo) and empty($request->marca) and empty($request->versao)){
            $menu=3;
            $lista=$pesquisa->listarModelo($request->modelo);
        }
        //retorna somente a pesquisa por modelo e versao
        if(isset($request->modelo) and empty($request->marca) and isset($request->versao)){
            $menu=4;
            $lista=$pesquisa->listarModeloVersao($request->modelo,$request->versao);
        }
        //retorna somente a marca
        if(isset($request->marca) and empty($request->modelo) and empty($request->versao)){
            $menu=5;
            $lista=$pesquisa->listarMarca($request->marca);
        }
        //retorna somente a pesquisa por marca e versao
        if(isset($request->marca) and empty($request->modelo) and isset($request->versao)){
            $menu=6;
            $lista=$pesquisa->listarMarcaVersao($request->marca,$request->versao);
        }
        //retorna somente a pesquisa por versao
        if(isset($request->versao) and empty($request->modelo) and empty($request->marca)){
            $menu=7;
            $lista=$pesquisa->listarVersao($request->versao);
        }

        return view('/viewsVeiculos/principal', compact('menu','lista'));

    }
    //metodo que chama a view de formulario
    public function formVeiculos(){
        return view("/viewsVeiculos/formCadastroVeiculos");
    }
    //metodo que insere no banco de dados um novo veiculo
    public function store(Request $request,novoVeiculo $novoVeiculo){
        if(empty($request->versao)){
            $request->versao=false;
        }
        $novoVeiculo->novoveiculo($request->marca,$request->modelo,$request->versao,$request->dica);
        return redirect('/home');
    }
    //metodo que excluir um veiculo do banco de dados
    public function excluir(Request $request){
        Veiculos::destroy($request->id);
        return view('viewsVeiculos/formCadastroVeiculos');
    }
    //metodo para chamar o form onde altera um veiculo
    public function formAlterar(){
        return view('/viewsVeiculos/formAlterar');
    }
    //metodo para alterar um veiculo
    public function alterarVeiculos(Request $request)
    {
        if(empty($request->versao)){
            $request->versao=false;
        }
        $veiculo=Veiculos::findOrFail($request->id);
        $veiculo->update([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'versao'=>$request->versao
    ]);
             $this->alterarDicas($request->dicas_id,$request->novadica);
             return view('/viewsVeiculos/formCadastroVeiculos');

    }

    public function alterarDicas(int $id,string $novadica){
            $dica=Dicas::findOrFail($id);
            $dica->update([
                'dica'=>$novadica
            ]);

    }


}
