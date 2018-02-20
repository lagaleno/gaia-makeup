<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model {

	public $table = 'mensagens';
	protected $fillable = ['nome', 'email', 'contato'];
}
