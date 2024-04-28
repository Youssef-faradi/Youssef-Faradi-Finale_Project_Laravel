<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'date',
        'is_available',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
