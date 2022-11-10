<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['order_item_id','user_id','cart_id','total_amount','payment_status','payment_mode','payment_date'];

    public function orderItem()
    {
        return $this->belongsTo('App\OrderItem');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cartItem()
    {
        return $this->belongsTo('App\CartItem');
    }
}
