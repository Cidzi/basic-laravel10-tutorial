<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Orderdetail extends Model
{
    use HasFactory;
    public function products() : HasMany
    { 
        return $this->hasMany(Product::class);
    }

    public function ordersales() : HasMany
    { 
        return $this->hasMany(OrderSale::class);
    }
}
