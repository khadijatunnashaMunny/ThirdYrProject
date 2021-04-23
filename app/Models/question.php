<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'ans',
        'category',

    ];
}
