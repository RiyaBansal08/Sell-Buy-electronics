<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable=['order_id','product_id','category_id','price','order_date','shipping_date','address'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
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
