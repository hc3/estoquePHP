<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Servico;

class ServicoController extends Controller

{

	public function lista() {
		$servicos = Servico::all();

		return view('servico.listagem')->with('servicos',$servicos);
	}

    public function novo() {
    	return view('servico.formulario');
    }

    public function adiciona(Request $request) {
    	$servico = new Servico();
    	$servico->descricao = $request->input('descricao');
    	$servico->valor = $request->input('valor');

    	$servico->save();

    	return redirect()->action('ServicoController@lista');		
    }

    public function show($idServico) {
    	$servicos = Servico::find($idServico);

    	if(empty($servicos)){
    		return "esse serviço não existe";
    	}

    	return view('servico.detalhes')->with('servicos',$servicos);
    }

    public function remove($idServico) {
    	$servico = Servico::find($idServico);

    	if(empty($servico)) {
    		return "não existe produto para ser deletado";
    	}

    	$servico->delete();

    	return redirect()->action('ServicoController@lista');
    }

    public function getForUpdate($idServico) {
    	$servicos = Servico::find($idServico);

    	return view('servico.update')->with('servicos',$servicos);
    }

    public function update($idServico, Request $request) {
    	$servico = Servico::find($idServico);

    	$servico->descricao = $request->input('descricao');
    	$servico->valor = $request->input('valor');

    	$servico->save();

    	return redirect()->action('ServicoController@lista');
    }

}
