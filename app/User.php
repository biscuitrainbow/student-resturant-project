<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = array();
    protected $username = 'username';

    public function reservations(){
        return $this->hasMany(Reservation::class,'user_id');
    }


    public function type(){
        return $this->belongsTo(UserType::class,'user_type_id');
    }
}
