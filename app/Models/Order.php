<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'total',
        'status',
    ];

    // Relación: un pedido pertenece a un cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relación: un pedido tiene muchos items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
