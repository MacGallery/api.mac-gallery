<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSparePart extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "stock", "visible"];
    // protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_has_product_spare_parts');
    }
}
