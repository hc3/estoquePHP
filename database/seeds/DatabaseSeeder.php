<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder {

	public function run() {
		DB::insert('insert into produtos (nome,quantidade,valor,descricao) 
			values (?,?,?,?)',array('Geladeira', 2, 5900.00,'Side by com gelo na porta'));

		DB::insert('insert into produtos (nome,quantidade,valor,descricao)
			values(?,?,?,?)',array('Fogão',5,950.00 , 'Painel automatico 6 bocas'));

		DB::insert('insert into produtos (nome,quantidade,valor,descricao)
			values(?,?,?,?)',array('Microondas',3,1520.00,'Manda SMS quanto terminar'));
	}
}