<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable =[
        'plaintes_Symptomes',
        'autre_Examens_Para_Clinique',
        'diagnostic',
        'traitement',
        'observations',
        'id_medecin',
        'id_patient',
    ];


    public function patient(): BelongsTo{

        return $this->belongsTo('App\Models\User','id_patient','id');
    }
    public function medecin() : BelongsTo
    {
        return $this->belongsTo('App\Models\Medecin', 'id_medecin', 'id');
    }
}
