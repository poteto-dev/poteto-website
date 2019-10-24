<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function platforms()
    {
        return $this->hasMany(ProjectPlatform::class);
    }

    public function labels()
    {
        return $this->morphToMany(Label::class, 'labelable');
    }
}
