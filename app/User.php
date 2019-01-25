<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'firstname', 'lastname', 'username', 'birthday', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function reviewed(){
        //link user to books via the reviews table
        return $this->belongsToMany("\App\Article", "reviews")
        ->withPivot("id","review")->withTimestamps();
    }

     public function owns(){
        return $this->belongsToMany("\App\Article")->withTimestamps();
     }
}
