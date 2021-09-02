<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'work_id',
        'position',
        'type',
        'video_mp4',
        'video_webm',
        'src',
        ];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

}
