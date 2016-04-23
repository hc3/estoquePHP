<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $fillable = ['descricao','valor','quantidade'];
}
