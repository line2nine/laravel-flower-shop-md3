<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $table = 'orders';
    protected $fillable = ['name' ,'order_note','phone','address','user_id','status' ];

    public function orderDetail()
    {
        return $this->hasOne(OrderDetail::class,'order_id');
    }
}
