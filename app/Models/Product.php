<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        "desc",
        "image",
        'price',
        'stock',
        "tag",
        'category_id',
        'admin_id',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function leeds()
    {
        return $this->hasMany(Leed::class);
    }
}
