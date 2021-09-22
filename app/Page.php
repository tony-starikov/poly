<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Translatable;

    protected $fillable = [
        'name',
        'title',
        'description',
    ];

    public function fields()
    {
        return $this->belongsToMany(Field::class)->withTimestamps();
    }
}
