<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}
