<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id');
    }

    public function labels()
    {
        return $this->morphToMany(Label::class, 'labelable');
    }
}
