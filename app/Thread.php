<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'categories_threads');
    }

    public function replies(){
        return $this->morphMany('App\Reply','repliable');
    }
}
