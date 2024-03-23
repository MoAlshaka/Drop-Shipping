<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leed extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_phone',
        'product_id',
        'quantity',
        'payment_method',
        'status',
        'seller_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
