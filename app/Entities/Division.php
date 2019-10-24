<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(Member::class, 'division_id');
    }
}
