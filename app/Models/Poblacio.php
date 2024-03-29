<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poblacio extends Model
{
    use HasFactory;

    public function comarca()
    {
        return $this->belongsTo(Comarca::class);
    }
}
