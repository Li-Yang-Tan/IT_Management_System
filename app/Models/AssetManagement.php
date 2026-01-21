<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetManagement extends Model
{
    /** @use HasFactory<\Database\Factories\AssetManagementFactory> */
    use HasFactory;

    protected $primaryKey = 'mngm_id';

    protected $fillable = [
        'assigned_date',
        'returned_date',
        'asset_id',
        'emp_id',
    ];

    protected $casts = [
        'assigned_date' => 'date',
        'returned_date' => 'date',
    ];

    public function asset() {
        return $this->belongsTo(Asset::class, 'asset_id', 'asset_id');
    }

    public function employee() {
        return $this->belongsTo(User::class, 'emp_id');
    }

}
