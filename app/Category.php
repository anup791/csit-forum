<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function threads(){
        return $this->belongsToMany(Thread::class,'categories_threads');
    }
}
