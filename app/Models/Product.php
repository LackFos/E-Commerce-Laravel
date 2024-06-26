<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function flashsale()
    {
        return $this->hasOne(Flashsale::class);
    }

    public function getPriceAfterDiscountAttribute()
    {
        return $this->flashsale?->price_after_discount ??
            $this->attributes['price'];
    }
}
