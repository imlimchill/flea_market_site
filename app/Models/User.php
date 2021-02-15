<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Qna;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'real_name',
        'tel',
        'address',
        'postal',
    ];

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

    
    public function Qnas()
    {
        return $this->hasMany(Qna::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function productCart()
    {
        return $this->hasMany(productCart::class);
    }


    public function Qnaowns(Qna $qna)
    {
        return auth()->id() == $qna->id;
    }

    public function Productowns(Product $product)
    {
        return auth()->id() == $product->user_id;
    }
}