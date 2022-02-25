<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'intitule',
        'course_id',
        'commentaire',
        'date_debut',
        'date_fin'
    ];

    use HasFactory;
}
