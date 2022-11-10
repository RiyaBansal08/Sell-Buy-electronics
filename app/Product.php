<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','stock_available','price','discount','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }

    public function cartItems()
    {
        return $this->hasMany('App\CartItem');
    }
}
