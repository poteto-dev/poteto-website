<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'category_id');
    }
}
