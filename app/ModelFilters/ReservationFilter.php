<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ReservationFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function year($value)
    {
        return $this->where(function ($q) use ($value) {
            return $q->whereYear('created_at', '=', $value);
        });
    }

    public function month($value)
    {
        return $this->where(function ($q) use ($value) {
            return $q->whereMonth('created_at', '=', $value);
        });
    }

    public function type($value)
    {
        return $this->where(function ($q) use ($value) {
            return $q->where('type', '=', $value);
        });
    }
}
