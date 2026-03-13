<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Tell Laravel to use table 'order' instead of 'order'
    protected $table = 'orders';

    // Fillable fields to avoid MassAssignmentException
    protected $fillable = [
        'user_id',
        'address',
        'quantity',
        'total_price',
    ];

    // Optional relationship
    public function user() {
        return $this->belongsTo(User::class);
}
}
