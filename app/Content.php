<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = array(
        'name','content'
    );
    public function comments() {
        return $this->morphMany('App\Comment','commentable'); // metodo inverso
    }

    public function tags() {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
