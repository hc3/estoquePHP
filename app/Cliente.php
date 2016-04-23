<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','idade','cpf','email','telefone','endereco_id'];

    public function endereco() {

    	return $this->belongsTo('estoque\Endereco');
    	
    }

    public function veiculo() {
        return $this->hasMany('estoque\Veiculo');
    }

    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($cliente)
        {
            $cliente->endereco()->delete();
        });
    }
}
