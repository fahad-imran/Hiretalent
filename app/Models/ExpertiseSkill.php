<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertiseSkill extends Model
{
    use HasFactory;
    protected $table='expertise_skill';


    public function skills(){
        return $this->belongsTo(Skill::class,'skill_id','id');
    }

    public function levels(){
        return $this->belongsTo(Level::class,'level_id','id');
    }
}
