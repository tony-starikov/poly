<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'id',
        'name',
        'value',
    ];

    public function fields()
    {
        return $this->belongsToMany(Page::class)->withTimestamps();
    }
}
