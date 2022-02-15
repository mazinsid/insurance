<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = ['sold_product_id','maintenance_center_id','start_date' , 'end_date' , 'status', 'notes'];

    public function SoldProduct(): BelongsTo
    {
        return $this->belongsTo(SoldProduct::class);
    }

    public function MintenanceCenter(): BelongsTo
    {
        return $this->belongsTo(MintenanceCenter::class);
    }
}
