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

    public function competencesdetail()
    {
        return $this->hasMany(CompetenceDetail::class, 'competences_id' ,'id');

    }  
    

}
