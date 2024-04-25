<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable = ['id','title','description','created_at','updated_at'];

    //relation for Expertise Models
    public function expertise(){
        return $this->hasMany(Expertise::class,'job_id','id');
    }
}
