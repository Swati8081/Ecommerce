<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    

    function image() {
        return $this->hasOne(ProductImage::class);
    }

    function images() {
        return $this->hasMany(ProductImage::class);
    }

    function category() {
        return $this->belongsTo(ProductCategory::class);
    }
}
