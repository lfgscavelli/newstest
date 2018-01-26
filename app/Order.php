<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = array(
        'name'
    );
    public function customer()  {
        return $this->belongsTo(Customer::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

}
