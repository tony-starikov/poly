<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function software()
    {
        return $this->belongsToMany(Software::class);
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
