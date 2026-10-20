<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        'email',
        'course',
        'year_level',
    ];
}
