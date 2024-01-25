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
        'ville'
    ];
    use HasFactory;
}
