<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'quantity',
    ];

    // Define relationships with User and Product models
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
