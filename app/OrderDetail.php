<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;

    protected $table = 'order_details';
    protected $fillable = ['order_id' ,'product_id','quantity','price' ];
}
