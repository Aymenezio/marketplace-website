<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'condition',
        'image',
    ];



    public function listings()
    {
        return $this->hasMany(Listing::class, 'item_id', 'item_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'item_id', 'item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    
}
