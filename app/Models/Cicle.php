<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cicle extends Model
{
    use HasFactory;

    public function estada()
    {
        return $this->hasMany(Estada::class);
    }
}