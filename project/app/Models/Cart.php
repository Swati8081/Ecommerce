<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','ip','user_id','quantity'];

    function products() {
        return $this->belongsTo(Product::class,'id');
    }
    function images() {
        return $this->hasMany(ProductImage::class,'product_id');
    }
  
}
