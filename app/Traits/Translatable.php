<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait Translatable
{
    public function __($fieldName)
    {
        $locale = App::getLocale();

        if ($locale === 'en') {
            $fieldName .= '_en';
        } elseif ($locale === 'ua') {
            $fieldName .= '_ua';
        } elseif ($locale === 'ru') {
            $fieldName .= '_ru';
        } elseif ($locale === 'de') {
            $fieldName .= '_de';
        }
    }
}
