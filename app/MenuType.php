<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    protected $guarded = [];


    public function menu(){
        return $this->hasMany(Menu::class,'menu_type_id');
    }
}
