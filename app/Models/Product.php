<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 
    'image', 'description' , 'status' ,
     'serial_number', 'branch_id', 'agent_id'];

    public function Insurance(): HasMany
    {
        return $this->hasMany(Insurance::class);
    }

    public function Agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function Branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

}
