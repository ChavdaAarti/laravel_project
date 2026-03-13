<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
     protected $table = 'cart';

     protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(cart_item::class);
    }
}