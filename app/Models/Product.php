<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function orderLine()
    {
        return $this->belongsToMany(OrderLine::class);
    }
}
