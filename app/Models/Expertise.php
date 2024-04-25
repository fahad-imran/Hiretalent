<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $table = 'expertise';
    protected $fillable = ['id', 'name', 'job_id', 'description', 'price', 'created_at', 'updated_at'];

    //relation for Job Models
    public function jobss()
    {
        return $this->belongsTo(Job::class,'job_id','id');
    }

    public function expertise_skills(){
        return $this->hasMany(ExpertiseSkill::class);
    }

    public function features(){
        return $this->hasMany(ExpertiseFeature::class,'expertise_id','id');
    }
}
