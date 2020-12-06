<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bds extends Model
{
    //
    protected $table= 'bds';
    protected $fillable = [
        'slug','body', 'title', 'author', 'email', 'img', 'resum',
    ];
}
