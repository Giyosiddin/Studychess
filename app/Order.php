<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Order extends Model
{
    public $guarded =[];

    public function items()
    {
    	return $this->hasMany(OrderItem::class);
    	// return $this->morphedByMany(Course::class, '','');
    }
}
