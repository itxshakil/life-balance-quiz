<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = [
        'answers',
        'results',
        'ip_address',
        'user_agent',
    ];

}
