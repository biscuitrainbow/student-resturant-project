<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    public function member(){
        return $this->belongsTo(Member::class,'member_id');
    }

    public function tables(){
        return $this->belongsToMany(Table::class,'reservations_tables')->withTimestamps();
    }

    public function menus(){
        return $this->belongsToMany(Menu::class,'reservations_menus')->withTimestamps()->withPivot('quantity');
    }
}
