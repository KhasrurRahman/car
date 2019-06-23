<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_add extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
