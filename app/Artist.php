<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
