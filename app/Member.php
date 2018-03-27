<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'member_id');
    }
}
