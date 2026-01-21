<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /** @use HasFactory<\Database\Factories\AssetFactory> */
    use HasFactory;
    protected $primaryKey = 'asset_id';

    protected $fillable = [
        'name',
        'category',
        'model',
        'brand',
        'purchased_at',
        'warranty_time',
    ];

    protected $casts = [
        'purchased_at' => 'date',
        'warranty_time' => 'date',
    ];
}
