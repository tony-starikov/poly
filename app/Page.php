<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Translatable;

    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
    ];

    public function fields()
    {
//        return $this->belongsToMany(Field::class, 'field_page', 'field_id', 'page_id');
        return $this->belongsToMany(Field::class)->withTimestamps();
    }
}
