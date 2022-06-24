<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceLangage extends Model
{
    use HasFactory;

    protected $fillable = [
        'libCompetenceLangage',
        'pourcentage',
        'competences_id',
    ];

    public function competence()
    {
        return $this->belongsTo(competence::class);
    }

}
