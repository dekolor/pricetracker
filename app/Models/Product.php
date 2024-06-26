<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'user_id',
        'name',
        'url',
        'price_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
