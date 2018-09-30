<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filter extends Model
{
    protected $table= 'filter';
    protected $fillable=[
        'cost', brand
    ];
}
