<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'language_id',
        'title',
        'status',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
