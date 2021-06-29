<?php


namespace App\Service;


use App\Models\Dicas;
use App\Models\User;
use App\Models\Veiculos;
use Cassandra\ExecutionOptions;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class novoVeiculo
{

    public function novoveiculo(string $marca,string $modelo,string $versao,string $dica){
        if(empty($versao)){
            $versao=false;
        }
        DB::transaction(function ()use($marca,$modelo,$versao,$dica){
            $objVeiculo=Veiculos::create(['marca'=>$marca,'modelo'=>$modelo,'versao'=>$versao]);
            $veiculo_id=$objVeiculo->id;
            $user=auth()->user()->id;

            $this->novaDica($dica,$veiculo_id,$user);
        });
    }
    public function novaDica(string $dica, int $veiculo_id, int $user){
        $dicas=new Dicas();
        $dicas->dica=$dica;
        $dicas->veiculo_id=$veiculo_id;
        $dicas->user_id=$user;
        $dicas->save();

    }

}

