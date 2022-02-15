<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone',
     'email', 'address', 'store_id' , 'user_id'];

    public function Store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function Products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function Insurance(): HasMany
    {
        return $this->hasMany(Iinsurance::class);
    }
}
