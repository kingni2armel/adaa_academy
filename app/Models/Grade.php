<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PraticalWork;
use App\Models\Student;
use App\Models\User;


class Grade extends Model
{
    use HasFactory;
    protected $fillable=[
        'travaux_id',
        'student_id',
        'valeur'
    ];
}
