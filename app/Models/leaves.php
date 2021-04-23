<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaves extends Model
{
    use HasFactory;
    protected $primaryKey = 'leave_id';
     protected $fillable = [
        'leave_id','student_id','reason','status','from','to',
    ];
}
