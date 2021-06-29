<?php

use App\Http\Controllers\veiculosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//rota que chama a pagina principal
Route::get('/',[veiculosController::class,'listarVeiculos']);
Route::post('/',[veiculosController::class,'listarVeiculos']);

//rota que chama o dashboard do usuario apos logar
Route::get('/dashboard',[usuarioController::class,'all'])
        ->name('dashboard');
//rota que exibe o fomulario para cadastrar um novo veiculo
Route::get('/formcadastro',[veiculosController::class,'formVeiculos'])
        ->middleware('auth');
//rota que ira inserir um novo veiculo no banco
Route::post('/formcadastro',[veiculosController::class,'store'])
    ->middleware('auth');;
//rota que ira retornar todos veiculos cadastrados pelo usuario

Route::get('/listaVeiculos',[veiculosController::class,'listarVeiculosCadastrados']);
//rota para excluir o veiculo
Route::post('/excluir/{id}',[veiculosController::class,'excluir'])
    ->middleware('auth');
//Rota para chamar o form de alteração
Route::get('/formAlterar/{id}+{marca}+{modelo}+{dica}+{versao}+{dicas_id}',[veiculosController::class,'formAlterar'])
    ->middleware('auth');
//rota para salvar as alterações
Route::post('/updateVeiculos/{id}+{dicas_id}',[veiculosController::class,'alterarVeiculos'])
    ->middleware('auth');





//rotas para executar a autenticação

Auth::routes();

Route::get('/home', [usuarioController::class, 'all'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
