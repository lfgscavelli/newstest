<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = array(
        'name'
    );
    public function customer() {
        return $this->belongsTo(Customer::class); // relazione inversa - 'foreign_key', 'other_key');
    }
}
