<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bde extends Model
{
    //
    protected $table= 'bde';
    protected $fillable = [
        'body', 'title', 'author', 'email', 'img',
    ];
}
