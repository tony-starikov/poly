<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['name', 'code', 'title', 'small_description', 'description', 'cover', 'image_1', 'image_2', 'image_3', 'video_mp4', 'video_webm', 'marmoset'];

    public function software()
    {
        return $this->belongsToMany(Software::class)->withTimestamps();
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }
}
