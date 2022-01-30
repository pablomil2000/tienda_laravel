<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function getIdCarritoAttribute() {
        $carrito = $this->carts()->where('estado', 'activo')->first();

        if($carrito){
            return $carrito;
        }

        $cartito = new Cart();
        $carrito = NULL;
        
        if (!isset($carrito)) 
            $carrito = new Cart();

        $carrito->estado = 'adctivo';
        $carrito->user_id = $this->id;
        $carrito->save();
        return $carrito;
    }
}
