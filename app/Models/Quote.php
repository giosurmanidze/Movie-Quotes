<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['quote_ka', 'quote_en', 'movie_id', 'movie_img'];


    public $translatable = ['quote_ka', 'quote_en'];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $attribute = "{$field}_{$locale}";

        return $this->{$attribute};
    }
}
