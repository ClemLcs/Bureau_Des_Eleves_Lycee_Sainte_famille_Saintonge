<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bda extends Model
{
    //
    protected $table= 'bda';
    protected $fillable = [
        'body', 'title', 'author', 'email', 'img', 'slug', 'resum', 'validate',
    ];
}
