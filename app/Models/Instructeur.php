<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Voertuig;
use App\Models\VoertuigInstructeur;

class Instructeur extends Model
{
    use HasFactory;


    
    public function voertuigen() : HasManyThrough
    {
        return $this->hasManyThrough(
            Voertuig::class,
            VoertuigInstructeur::class,
            'Instructeur_Id', // Replace with your actual column name
            'id',
            'id',
            'voertuig_id'
        );
    }
}