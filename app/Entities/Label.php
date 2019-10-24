<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Label extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function articles()
    {
        return $this->morphedByMany(Article::class, 'labelable');
    }

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'labelable');
    }
}
