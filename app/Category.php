<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    Use SoftDeletes;

    public $timestamps = true; 

    protected $fillable = [
        'name',
        'obs'
    ];
}
