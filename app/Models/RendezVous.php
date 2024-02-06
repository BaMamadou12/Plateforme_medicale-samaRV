<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class RendezVous extends Model
{

    protected $fillable =[
        'heure',
        'status',
        'id_patient',
        'id_medecin',
        'date',
    ];



    public function patient(){

        return $this->belongsTo('App\Models\User','id_patient','id');
    }
    public function medecin()
    {
        return $this->belongsTo('App\Models\Medecin', 'id_medecin', 'id');
    }


    use HasFactory;
}
