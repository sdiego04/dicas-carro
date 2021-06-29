<?php


namespace App\Service;


use Illuminate\Support\Facades\DB;

class listarPesquisa
{
    public function listarVersao(string $versao){
        $lista=DB::table('veiculo')
            ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
            ->where('veiculo.versao','ilike','%'.$versao.'%')
            ->join('dicas','dicas.veiculo_id','=','veiculo.id')
            ->get();
        return $lista;

    }
    public function listarMarcaVersao(string $marca,string $versao){
        $lista=DB::table('veiculo')
            ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
            ->where('veiculo.marca','ilike','%'.$marca.'%')
            ->join('dicas','dicas.veiculo_id','=','veiculo.id')
            ->where('veiculo.versao','ilike','%'.$versao.'%')
            ->get();
        return $lista;

    }
    public function listarMarca(string $marca){
        $lista=DB::table('veiculo')
            ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
            ->where('veiculo.marca','ilike','%'.$marca.'%')
            ->join('dicas','dicas.veiculo_id','=','veiculo.id')
            ->get();
        return $lista;

    }
    public function listarModeloVersao(string $modelo,string $versao){
        $lista=DB::table('veiculo')
            ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
            ->where('veiculo.modelo','ilike','%'.$modelo.'%')
            ->where('veiculo.versao','ilike','%'.$versao.'%')
            ->join('dicas','dicas.veiculo_id','=','veiculo.id')
            ->get();
        return $lista;

    }
    public function listarModelo(string $modelo){
        $lista=DB::table('veiculo')
            ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
            ->join('dicas','dicas.veiculo_id','=','veiculo.id')
            ->get();
        return $lista;

    }
    public function listarMarcaModelo(string $modelo,string $marca){
        $lista=DB::table('veiculo')
                    ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
                    ->where('veiculo.marca','ilike','%'.$marca.'%')
                    ->where('veiculo.modelo','ilike','%'.$modelo.'%')
                    ->join('dicas','dicas.veiculo_id','=','veiculo.id')
                    ->get();
                return $lista;

    }

    public function listarAll(){
        $lista=DB::table('veiculo')
        ->select('veiculo.marca','veiculo.modelo','veiculo.versao','dicas.dica')
        ->join('dicas','dicas.veiculo_id','=','veiculo.id')
        ->get();
        return $lista;
    }
}
