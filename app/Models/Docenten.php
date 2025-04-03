<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docenten extends Model
{
    public function vakken()
    {
        return $this->belongsTo(Vakken::class);
    }
}
