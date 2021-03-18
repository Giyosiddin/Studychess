<?php

namespace App;

use Illuminate\Database\Eloquent\Model;   
use TCG\Voyager\Traits\Translatable;

class Lesson extends Model
{
	use Translatable;
    protected $translatable = ['title', 'description','for_who'];
}
