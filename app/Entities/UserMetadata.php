<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserMetadata extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
