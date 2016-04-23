<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Veiculo;

class VeiculoController extends Controller
{
    public function lista() {
        $veiculos = Veiculo::with('cliente')->get();

    	return view('veiculo.listagem')->with('veiculos',$veiculos);
    } 

    public function adiciona(Request $request) {
    	$veiculo = new Veiculo();

        $veiculo->placa = $request->input('placa');
        $veiculo->cor = $request->input('cor');
        $veiculo->ano = $request->input('ano');
        $veiculo->cliente_id = $request->input('cliente_id');

        $veiculo->save();

        return redirect()->action('VeiculoController@lista');
    }

}
