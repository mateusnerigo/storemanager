<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name', 
        'username',
        'password',
        'email',
        'phone1',
        'phone2',
        'rg',
        'cpf',
        'obs',
        'address',
        'address_number',
        'neighborhood',
        'city',
        'uf',
        'cep',
        'is_admin'
    ];
}
