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

    public function productRange()
    {
        return $this->belongsTo(ProductRange::class);
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
