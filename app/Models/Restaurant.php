<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['username', 'password', 'name', 'promo_text', 'image', 'location', 'latitude', 'longitude', 'start_date', 'end_date', 'is_active'];

    protected $hidden = ['password'];


    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
