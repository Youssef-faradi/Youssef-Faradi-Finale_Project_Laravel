<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'address',
        'price',
        'guests',
        'bedrooms',
        'bathrooms',
        // 'images',
    ];


    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
