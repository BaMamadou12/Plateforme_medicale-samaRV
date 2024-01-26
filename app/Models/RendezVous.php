<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{

    protected $fillable =[
        'heure',
        'status',
        'id_patient',
        'id_medecin',
        'date',
    ];
    use HasFactory;
}
