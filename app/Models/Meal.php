<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'image', 'price', 'is_available'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
