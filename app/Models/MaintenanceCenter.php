<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceCenter extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'address' , 'phone' , 'email' , 'store_id' , 'agent_id' ];


    public function Maintenance(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }

    public function Store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function Agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
