<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class RendezVous extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable =[
        'heure',
        'status',
        'id_patient',
        'id_medecin',
        'date',
        'rang'
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
