<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Peca;

class PecaController extends Controller
{
    public function lista() {
    	$pecas = Peca::all();

    	return view('peca.listagem')->with('pecas',$pecas);
    }

    public function novo() {
    	return view('peca.formulario');
    }

    public function adiciona(Request $request) {
    	$peca = new Peca();
    	$peca->descricao = $request->input('descricao');
    	$peca->valor = $request->input('valor');
    	$peca->quantidade = $request->input('quantidade');

    	$peca->save();

    	return redirect()->action('PecaController@lista');
    }

    public function show($idPeca) {
    	$pecas = Peca::find($idPeca);

    	if(empty($pecas)){
    		return "não existe peça para mostrar";
    	}

    	return view('peca.detalhes')->with('pecas',$pecas);
    }

    public function remove($idPeca) {
    	$pecas = Peca::find($idPeca);

    	if(empty($pecas)){
    		return "não existe peça para ser deletada";
    	}

        $pecas->delete();

    	return redirect()->action('PecaController@lista');
    }

    public function getForUpdate($idPeca) {
    	$pecas = Peca::find($idPeca);

    	if(empty($pecas)){
    		return "não existe peça para ser atualizada";
    	}

    	return view('peca.update')->with('pecas',$pecas);
    }

    public function update(Request $request , $idPeca) {
    	$pecas = Peca::find($idPeca);
    	$pecas->descricao = $request->input('descricao');
    	$pecas->valor = $request->input('valor');
    	$pecas->quantidade = $request->input('quantidade');

    	$pecas->save();

    	return redirect()->action('PecaController@lista');
    }
}
