<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;

    public function hopital(): \Illuminate\Database\Eloquent\Relations\HasOne
    {

        return $this->hasOne('App\Models\Hopital','id_medecin','id');
    }
}
