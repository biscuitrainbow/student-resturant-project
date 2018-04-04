<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Reservation extends Model
{

    use Filterable;

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tables()
    {
        return $this->belongsToMany(Table::class, 'reservations_tables')->withTimestamps();
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'reservations_menus')->withTimestamps()->withPivot('quantity', 'discount');
    }

    

}
