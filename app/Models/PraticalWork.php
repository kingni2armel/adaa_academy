<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraticalWork extends Model
{
    protected $fillable = [
        'intitule',
        'session_id',
        'date',
    ];
    use HasFactory;
}
