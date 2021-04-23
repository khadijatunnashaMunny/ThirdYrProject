<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_ans',
        'result_json',
        'yes_ans',

    ];
}
