<?php

namespace App\Http\Controllers;

use App\Models\Dicas;
use App\Models\Veiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Element;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=auth()->id();
        if($id==$this->validarUsuario($id)) {
            $lista = DB::table('veiculo')
                ->select('veiculo.id','veiculo.marca', 'veiculo.modelo', 'veiculo.versao', 'dicas.dica','dicas.id as dicas_id')
                ->join('dicas', 'dicas.veiculo_id', '=', 'veiculo.id')
                ->where('dicas.user_id', '=', $id)
                ->get();

            return view('viewsUsuario/dashboard', compact('lista'));
        }else
            $lista=false;
            return view('viewsUsuario/dashboard', compact('lista'));
    }
    public function validarUsuario(int $id){
        $ids=Dicas::query()->orderBy('id')->get();

        foreach ($ids as $item){
            if ($item->user_id==$id)
                return $item->user_id;
            }

        }

}
