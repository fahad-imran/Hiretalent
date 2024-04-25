<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable  = ['id', 'name', 'status','created_at','updated_at'];

    public function expertiseskills(){
        return $this->hasMany(ExpertiseSkill::class);
    }
}
