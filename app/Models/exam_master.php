<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_master extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'ans',
        'options',
        'status',

    ];

}
