<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function type(){
        return $this->belongsTo(MenuType::class,'menu_type_id');
    }
}
