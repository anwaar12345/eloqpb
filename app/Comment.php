<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentedBy()
    {
        return $this->belongsTo(User::class,'uid','id');
    }
}
