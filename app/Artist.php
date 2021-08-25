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
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
