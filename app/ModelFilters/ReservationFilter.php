<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Carbon\Carbon;

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

    public function fromDate($date)
    {
        $from_date = Carbon::instance(new \DateTime($date));

        if ($this->input('to_date') != '') {
            $to_date = Carbon::instance(new \DateTime($this->input('to_date')));
            return $this->whereBetween('date_time', [$from_date, $to_date]);
        }

        return $this->where('date_time',$from_date);

    }
}
