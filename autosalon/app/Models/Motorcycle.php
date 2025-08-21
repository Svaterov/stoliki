<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'brand', 'model', 'year', 'price', 'engine_type',
        'engine_cc', 'horsepower', 'transmission', 'type',
        'mileage', 'color', 'description', 'images', 'in_stock'
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
        'in_stock' => 'boolean'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}