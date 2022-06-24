<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function service()
    {
        return $this->hasMany(ServiceDetail::class, 'services_id' ,'id');

    }
}
