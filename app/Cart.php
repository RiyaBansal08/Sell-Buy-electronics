<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['user_id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function cartItems()
    {
        return $this->hasMany('App\CartItem');
    }
}
