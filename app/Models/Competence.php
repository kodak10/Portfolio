<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function competenceslangages()
    {
        return $this->hasMany(CompetenceLangage::class, 'competences_id' ,'id');

    }

    public function competencesframeworks()
    {
        return $this->hasMany(competencesframeworks::class, 'competences_id' ,'id');

    }
    

}
