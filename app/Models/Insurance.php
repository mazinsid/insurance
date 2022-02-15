<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $filleble = ['store_id', 'customer_id', 'product_id', 'start_date', 'end_date', 'price', 'status' , 'notes'];

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function Store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    
}
