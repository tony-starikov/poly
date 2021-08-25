<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'slogan',
        'company_name',
        'location_text',
        'location_link',
        'establishment',
        'employee',
        'ceo',
        'director',
        'email',
        'social_1',
        'social_2',
        'social_3',
        'social_4',
        'social_5',
        'video_mp4',
        'video_webm',
        'bg_image_jpg',
        'map_src',
    ];
}
