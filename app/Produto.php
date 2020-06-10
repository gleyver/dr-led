<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   	protected $fillable = ['codigo_produto', 'descricao', 'fk_categoria', 'path_image', 'destaque'];	
		protected $primaryKey = 'id_produto';
		
}
