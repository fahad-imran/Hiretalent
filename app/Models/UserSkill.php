<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;
    protected $table = 'user_skills';

    protected $fillable  = ['id','user_id','skill_id','level_id'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
