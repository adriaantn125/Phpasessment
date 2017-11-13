<?php
// Created by Adriaan van Niekerk
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','groups','balance'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
