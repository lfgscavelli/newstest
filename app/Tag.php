<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = array(
        'name'
    );

    public function content()  {
        return $this->morphedByMany('App\Content', 'taggable'); // relazione inversa
    }
}
