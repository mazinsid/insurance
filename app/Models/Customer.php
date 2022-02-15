<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'address', 'user_id'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Insurance(): HasMany
    {
        return $this->hasMany(Insurance::class);
    }

    public function SoldProduct(): HasMany
    {
        return $this->hasMany(SoldProduct::class);
    }


}
