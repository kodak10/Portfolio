<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceLangage extends Model
{
    use HasFactory;

    protected $fillable = [
        'competence_id',
        'libCompetenceLangage',
        'pourcenntage',
    ];

    public function competence(){
        return $this->hasMany(Competence::class);
    }
}
