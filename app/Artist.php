<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'code',
        'title',
        'position',
        'description',

        'image',
        'image_sqr',

        'top_left_corner',
        'top_right_corner',
        'bottom_left_corner',
        'bottom_right_corner',

        'middle_top_left_corner',
        'middle_top_right_corner',
        'middle_bottom_left_corner',
        'middle_bottom_right_corner',

        'small_top_left_corner',
        'small_top_right_corner',
        'small_bottom_left_corner',
        'small_bottom_right_corner',

        'name_en',
        'name_ua',
        'name_ru',
        'name_de',

        'position_en',
        'position_ua',
        'position_ru',
        'position_de',

        'description_en',
        'description_ua',
        'description_ru',
        'description_de',
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
