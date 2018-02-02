<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $guarded = [];

    public function type(){
        return $this->belongsTo(TableType::class,'table_type_id');
    }
}
