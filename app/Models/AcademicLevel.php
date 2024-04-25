<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    use HasFactory;
    public $table ='academic_levels';
    protected $guarded = ['*'];

    //extra code
    public function academics_l(){
        return $this->hasMany(Academic::class);
    }
    public function academic_users(){
        return $this->hasMany(User::class);
    }
}
