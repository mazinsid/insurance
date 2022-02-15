<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProduct extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'customer_id', 'price', 'status' ,'sold_date' , 'notes'];

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function Maintenance(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }


}
