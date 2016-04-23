<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('clientes', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('nome')->required();
        $table->integer('idade');
        $table->string('cpf');
        $table->string('email');
        $table->string('telefone');
        $table->timestamps();
        $table->integer('endereco_id')->unsigned()->nullable();
        $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
