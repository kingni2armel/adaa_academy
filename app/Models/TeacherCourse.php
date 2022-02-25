<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\User;

class TeacherCourse extends Model
{
    protected $fillable = [
        'teacher_id',
        'course_id'
    ];
    use HasFactory;
}
