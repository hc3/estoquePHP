<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller {

	
	public function novo() {

		return view('produto.formulario');
	}



	public function adiciona() {

		$produto = new Produto();
		$produto->nome = Request::input('nome');
		$produto->descricao = Request::input('descricao');
		$produto->valor = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');

		$produto->save();
		
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}


	public function lista() {

		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos',$produtos);
	}


	public function show($idProduto) {

		$resposta = Produto::find($idProduto);

		if(empty($resposta)) {
			return "esse produto não existe!";
		}

		//return response()->json(['produtos',$resposta]);
		return view('produto.detalhes')->with('produtos',$resposta);
	}


	public function remove($idProduto) {
		$produto = Produto::find($idProduto);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}


	public function getForUpdate($idProduto) {
		$produtos = Produto::find($idProduto);

		return view('produto.update')->with('produtos',$produtos);
	}



	public function update($idProduto) {
		$produto = Produto::find($idProduto);

		$produto->nome = Request::input('nome');
		$produto->descricao = Request::input('descricao');
		$produto->valor = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');

		$produto->save();

		return redirect()->action('ProdutoController@lista');
	}


}