<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable =[
        'plaintes_Symptomes',
        'autre_Examens_Para_Clinique',
        'diagnostic',
        'traitement',
        'observations',
        'id_patient',
        'id_medecin'
    ];


    public function patient(){

        return $this->belongsTo('App\Models\User','id_patient','id');
    }
    public function medecin()
    {
        return $this->belongsTo('App\Models\Medecin', 'id_medecin', 'id');
    }
}
