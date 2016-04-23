<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['placa','cor','ano','cliente_id'];

    public function cliente() {

    	return $this->belongsTo('estoque\Cliente');

    }
}
