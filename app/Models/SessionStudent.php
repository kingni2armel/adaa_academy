<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Session;


class SessionStudent extends Model
{
  protected $fillable=[
            'sesson_id',
            'student_id'
  ];
        
    use HasFactory;
}
