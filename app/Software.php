<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
