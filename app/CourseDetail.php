<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CourseDetail extends Model
{
    
	use Translatable;
    protected $translatable = ['name', 'text'];
    
    public $timestamps = false;
}
