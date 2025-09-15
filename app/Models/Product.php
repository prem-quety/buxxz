<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'slug',
        'category_id',
        'brand_id',
        'description',
        'currency',
        'price',
        'sale_price',
        'cost_price',
        'stock',
        'in_stock',
        'is_active',
        'barcode',
        'weight',
        'length',
        'width',
        'height',
        'rating',
        'reviews',
        'image',
        'gallery',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'gallery' => 'array',
        'in_stock' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'rating' => 'decimal:2',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
