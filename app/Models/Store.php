<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\belongsTo;
class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'address',
     'logo', 'description'];

    public function branch(): HasMany
    {
        return $this->HasMany(Branch::class);
    }

    public function MaintenanceCenter(): HasMany
    {
        return $this->hasMany(MaintenanceCenter::class);
    }

    
}
