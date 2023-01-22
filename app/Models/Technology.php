<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }
}
