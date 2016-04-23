<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['rua','bairro','cep','cidade','uf'];
}
