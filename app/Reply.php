<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function repliable()
    {
        return $this->morphTo();
    }

    public function replies(){
        return $this->morphMany('App\Reply','repliable');
    }
}
