<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'password',
        'prenom',
        'telephone',
        'disponibilite',
        'specialite',

    ];

    public function hopital(): \Illuminate\Database\Eloquent\Relations\HasOne
    {

        return $this->hasOne('App\Models\Hopital','id_medecin','id');
    }
}
