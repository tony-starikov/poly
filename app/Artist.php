<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'code', 'title', 'position', 'description', 'image', 'image_sqr'];

    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
