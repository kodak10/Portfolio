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

    public function type(){
        return $this->belongsTo(CompetenceLangage::class, "competenceLangage_id", "id");
    }
}
