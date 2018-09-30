<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table= 'product';
    protected $fillable=[
        'totalPrice', 'address', 'paymentType', 'product1', 'product2', 'product3', 'number1', 'number2', 'number3'
    ];
}
