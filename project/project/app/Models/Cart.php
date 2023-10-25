<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','ip','user_id','quantity'];

    function product() {
        return $this->belongsTo(Product::class,'id');
    }
    
  
}
