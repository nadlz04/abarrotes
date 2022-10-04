<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDatail extends Model
{
    protected $fillable = [
        'purchase_id',
        'product_id',
        'quantity',
        'price',
        'discount',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
