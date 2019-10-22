<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function division()
    {
        return $this->hasOne(Division::class, 'division_id');
    }
}
