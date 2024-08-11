<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';

    public function listings()
    {
        return $this->hasMany(Listing::class, 'seller_id', 'user_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id', 'user_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'reviewer_id', 'user_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'user_id', 'user_id');
    }
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',   
        'email',
        'password',
        'phone_number',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}

