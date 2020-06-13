<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;

//    protected $table = 'order_details';
//    protected $fillable = ['order_id' ,'product_id','quantity','price' ];

//    public function orders()
//    {
//        return $this->hasOne(Order::class,'order_id');
//    }

    protected $table = 'order_details';
    protected $fillable = ['product_id','order_id','quantity','price'];
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function order(){
        return $this->belongsTo('App\Order','order_id','id');
    }
}
