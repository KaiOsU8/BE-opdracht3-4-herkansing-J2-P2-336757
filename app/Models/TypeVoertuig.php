<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Voertuig; // Add this line to import the Voertuig class



class TypeVoertuig extends Model
{
    use HasFactory;

    public function voertuig(): BelongsTo
    {
        return $this->belongsTo(Voertuig::class);
    }
}
