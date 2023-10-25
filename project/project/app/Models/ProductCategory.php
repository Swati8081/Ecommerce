<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    function parent() {
        return $this->belongsTo(ProductCategory::class,'parent_id');
    }
    function child() {
        return $this->hasMany(ProductCategory::class,'parent_id');
        
    }
}

