<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'name',
        'code',
        'title',
        'description',
        'software',

        'name_en',
        'name_ua',
        'name_ru',
        'name_de',

        'description_en',
        'description_ua',
        'description_ru',
        'description_de',

        'software_en',
        'software_ua',
        'software_ru',
        'software_de',
    ];
}
