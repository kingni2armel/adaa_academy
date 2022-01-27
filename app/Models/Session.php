<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'intitule',
        'commentaire',
        'date_debut',
        'date_fin'
    ];
}
