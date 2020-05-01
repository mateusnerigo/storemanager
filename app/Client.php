<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
	use SoftDeletes;

	public $timestamps = true;
	protected $fillable = [
		'name',
		'nickname',
		'phone1',
		'phone2',
		'email',
		'vip',
		'rg',
		'cpf',
		'obs',
		'total_spent',
		'address',
		'address_number',
		'neighborhood',
		'city',
		'uf_id',
		'cep',
		'user_id'
	];
}
