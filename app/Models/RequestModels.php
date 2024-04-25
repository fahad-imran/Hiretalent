<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestModels extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = ['id', 'user_id', 'expertise_id', 'job_id', 'description', 'consent', 'created_at', 'updated_at'];

    public function expertise()
    {
        return $this->belongsTo(Expertise::class,'expertise_id','id');
    }
}
