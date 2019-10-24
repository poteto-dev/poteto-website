<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberMetadata extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function member()
    {
        return $this->hasOne(Member::class, 'member_id');
    }
}
