<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $fillable = ['name', 'image'];

    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
