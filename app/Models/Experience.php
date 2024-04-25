<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public $timestamps = false;
    //to show only year from date function
    protected $dates = ['from_date','to_date'];

    //comment these value when show data in table then pack t0_date
    public function getFromDateAttribute($FromDate)
    {
        return $this->attributes['from_date'] = Carbon::parse($FromDate)->format('Y-m-d');
    }
    // public function getToDateAttribute($ToDate)
    // {
    //     return $this->attributes['to_date'] = Carbon::parse($ToDate)->format('Y-m-d');
    // }



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
