<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    protected $fillable = ['title_ka', 'title_en',];

    public $translatable = ['title_ka', 'title_en'];

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $attribute = "{$field}_{$locale}";

        return $this->{$attribute};
    }


}
