<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function OrderDetail(){
        return $this->hasMany('App\OrderDetail','product_id','id');
    }
}
