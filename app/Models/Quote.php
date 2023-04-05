<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'quote', 'id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}