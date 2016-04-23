<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Cliente;
use estoque\Endereco;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    

	public function lista() {

		$clientes = Cliente::with('endereco')->get();

		return view('cliente.listagem')->with('clientes',$clientes);
	}

	public function novo() {
		return view('cliente.formulario');
	}

	public function adiciona(Request $request) {

		$cliente = new Cliente();
		$endereco = new Endereco();
		$endereco->rua = $request->input('rua');
		$endereco->bairro = $request->input('bairro');
		$endereco->cep = $request->input('cep');
		$endereco->cidade = $request->input('cidade');
		$endereco->uf = $request->input('uf');
		$endereco->save();
		$endereco_id = $endereco->id;
		$cliente->endereco_id = $endereco_id; 
		$cliente->nome = $request->input('nome');
		$cliente->idade = $request->input('idade');
		$cliente->cpf = $request->input('cpf');
		$cliente->email = $request->input('email');
		$cliente->telefone = $request->input('telefone');
		$cliente->save();

		return redirect()->action('ClienteController@lista');

	}


	public function show($id) {

		$cliente = Cliente::find($id)->join('endereco','cliente.endereco_id','endereco.id')->selectRaw('*');

		if(empty($cliente)) {
			return "cliente não existe";
		}

		return view('cliente.detalhes')->with('cliente',$cliente);
	}

	public function remove($idCliente) {
		$cliente = Cliente::find($idCliente);
		$cliente->delete();

		return redirect()->action('ClienteController@lista'); 
	}

	public function getForUpdate($idCliente) {
		$cliente = Cliente::find($idCliente);

		return view('cliente.update')->with('cliente',$cliente);
	}

	public function update($idCliente , Request $request) {
		$cliente = Cliente::find($idCliente);

		$cliente->nome = $request->input('nome');
		$cliente->idade = $request->input('idade');
		$cliente->cpf = $request->input('cpf');
		$cliente->email = $request->input('email');
		$cliente->telefone = $request->input('telefone');
		$cliente->endereco->rua = $request->input('rua');
		$cliente->endereco->bairro = $request->input('bairro');
		$cliente->endereco->cep = $request->input('cep');
		$cliente->endereco->cidade = $request->input('cidade');
		$cliente->endereco->uf = $request->input('uf');

		$cliente->save();

		return redirect()->action('ClienteController@lista');
	}
}
