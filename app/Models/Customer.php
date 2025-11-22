<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // Relación: un cliente tiene muchos pedidos
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
