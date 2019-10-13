<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectPlatform extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
