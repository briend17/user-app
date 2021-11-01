<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
     protected $fillable = [
        'nombre'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
