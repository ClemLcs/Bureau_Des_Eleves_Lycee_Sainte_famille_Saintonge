<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bdc extends Model
{
    //
    protected $table= 'bdc';
    protected $fillable = [
        'body', 'title', 'author', 'email', 'img', 'slug', 'resum',
    ];
}
