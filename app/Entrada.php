<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
   	protected $fillable = ['quantidade', 'valor_compra', 'valor_venda', 'fk_produto', 'created_at'];	
	protected $primaryKey = 'id_entrada';
}
