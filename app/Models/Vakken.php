<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vakken extends Model
{
    public function docentens()
    {
        return $this->hasMany(Docenten::class);
    }
}
