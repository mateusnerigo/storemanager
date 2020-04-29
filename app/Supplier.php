<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    
    protected $fillable = [
        'name', 
        'address',
        'address_number',
        'neighborhood',
        'city',
        'uf_id',
        'cep', 
        'phone1',
        'phone2',
        'email',
        'cnpj', 
        'company',
        'ie',
        'obs'
    ];
}
