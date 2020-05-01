<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	public $timestamps = true;

	protected $fillable = [
		'name',
		'stock',
		'extra_code',
		'manufacturer',
		'buy_price',
		'sell_price',
		'promo_price',
		'description',
		'obs',
		'category_id',
		'supplier_id'
	];
}
