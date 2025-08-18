<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'brand_id',
        'color_id',
    ];

    public function color():BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}