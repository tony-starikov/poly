<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'code',
        'title',
        'cover_img',

        'name_en',
        'name_ua',
        'name_ru',
        'name_de',

        'small_description_en',
        'small_description_ua',
        'small_description_ru',
        'small_description_de',

        'description_en',
        'description_ua',
        'description_ru',
        'description_de',
    ];

    public function software()
    {
        return $this->belongsToMany(Software::class)->withTimestamps();
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
