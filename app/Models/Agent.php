<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 
    'address', 'description'];

    public function Insurance(): HasMany
    {
        return $this->hasMany(Insurance::class);
    }

    public function Product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function MaintenanceCenter(): HasMany
    {
        return $this->hasMany(MaintenanceCenter::class);
    }
}
