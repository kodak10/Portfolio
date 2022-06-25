<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib',
        'pourcentage',
        'competences_id',
    ];

    public function competence()
    {
        return $this->belongsTo(competence::class);
    }
}
