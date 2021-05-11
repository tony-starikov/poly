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
        'location',
        'location_link',
        'establishment',
        'employee',
        'ceo',
        'director',
        'email',
        'email_link',
        'social_1',
        'social_2',
        'social_3',
        'social_4',
        'social_5',
        'social_6',
        'jobs_description',
        'recruiting_process',
    ];
}
