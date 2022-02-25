<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Dayli;

class StudentDayli extends Model
{

        protected $fillable = [
                'student_id',
                'dayli_id'
        ];
    use HasFactory;
}
