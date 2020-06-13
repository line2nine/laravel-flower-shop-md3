<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $table = 'orders';
    protected $fillable = ['name' ,'order_note','phone','address','user_id','payment' ];

    public function orderDetail()
    {
//        return $this->hasOne(OrderDetail::class,'order_id');
        return $this->hasMany('App\Models\OrderDetail','order_id','id');
    }
}
