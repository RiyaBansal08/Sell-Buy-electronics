<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function orderItems()
    {
        return $this->belongsToMany('App\OrderItem');
    }
}
