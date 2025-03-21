<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['username', 'password', 'full_name', 'phone', 'vehicle_type', 'is_active'];

    protected $hidden = ['password'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
