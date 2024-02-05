<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{

    protected $fillable=[
        'nom',
        'adresse',
        'email',
        'telephone',
        'ville',
        'region'
    ];
    use HasFactory;
    public function medecin(){

        return $this->belongsTo('App\Models\Medecin','id_medecin','id');
    }
}
