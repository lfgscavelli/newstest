<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array(
        'body'
    );
    public function commentable() {
        return $this->morphTo();  //relazione polimorfica
    }
}
