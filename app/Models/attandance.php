<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attandance extends Model
{
    use HasFactory;
    protected $primaryKey = 'attendance_id';
    protected $fillable = [
       'attendance_id',
       'status',
       'student_id',
   ];
}


