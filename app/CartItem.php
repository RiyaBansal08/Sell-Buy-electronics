<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable=['cart_id','product_id','order_id','quantity_wished'];

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
}
