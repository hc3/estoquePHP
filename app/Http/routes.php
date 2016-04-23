<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**
RODAS DA ENTIDADE PRODUTO
**/

Route::get('/produtos' , 'ProdutoController@lista');

Route::get('/produtos/show/{id?}','ProdutoController@show')->where('id','[0-9]+');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/update/{id}','ProdutoController@getForUpdate');

Route::post('/produtos/atualizar/{id}', 'ProdutoController@update');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');



/**
RODAS DA ENTIDADE CLIENTE
**/
Route::get('/clientes','ClienteController@lista');

//Route::get('/clientes/novo','ClienteController@novo');

Route::post('/clientes/adiciona','ClienteController@adiciona');

//Route::get('/clientes/show/{id?}','ClienteController@show')->where('id','[0-9]+');

Route::get('/clientes/remove/{id}','ClienteController@remove');

//Route::get('/clientes/update/{id}','ClienteController@getForUpdate');

Route::post('/clientes/atualizar/{id}','ClienteController@update');


/**
RODAS DA ENTIDADE SERVICO
**/
Route::get('/servicos','ServicoController@lista');

//Route::get('/servicos/novo','ServicoController@novo');

Route::post('/servicos/adiciona','ServicoController@adiciona');

//Route::get('/servicos/show/{id?}','ServicoController@show')->where('id','[0-9]+');

Route::get('/servicos/remove/{id}','ServicoController@remove');

//Route::get('/servicos/update/{id}','ServicoController@getForUpdate');

Route::post('/servicos/atualizar/{id}','ServicoController@update');

/**
RODAS DA ENTIDADE PEÇA
**/
Route::get('/pecas','PecaController@lista');

//Route::get('/pecas/novo','PecaController@novo');

Route::post('/pecas/adiciona','PecaController@adiciona');

//Route::get('/pecas/show/{id?}','PecaController@show')->where('id','[0-9]');

Route::get('/pecas/remove/{id}','PecaController@remove');

//Route::get('/pecas/update/{id}','PecaController@getForUpdate');

Route::post('/pecas/atualizar/{id}','PecaController@update');


/**
RODAS DA ENTIDADE VEICULO
**/
Route::get('/veiculos','VeiculoController@lista');

Route::post('/veiculos/adiciona','VeiculoController@adiciona');

Route::get('/veiculos/remove/{id}','VeiculoController@remove');

Route::post('/veiculos/atualizar/{id}','VeiculoController@update');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/produtos' , 'ProdutoController@lista');

    Route::get('/clientes','ClienteController@lista');

    Route::get('/servicos','ServicoController@lista');

    Route::get('/pecas','PecaController@lista');

    Route::get('/veiculos','VeiculoController@lista');
});
