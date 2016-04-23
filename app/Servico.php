<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{	
	protected $fillable = ['descricao','valor'];
}
