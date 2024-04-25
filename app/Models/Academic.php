<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table = 'academics';
    //protected $guarded = ['*'];
    protected $fillable = ['id', 'user_id', 'mobile','title','level_id','year','total_result','obtained_results','institute_name'];   


    public function academic_levels()
    {
        return $this->belongsTo(AcademicLevel::class,'level_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,);
    }
}
