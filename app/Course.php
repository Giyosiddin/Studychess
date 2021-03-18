<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Course extends Model
{
	use Translatable;
    protected $translatable = ['title', 'description','what_learn','for_who','short_text','time'];

    public function details()
    {
    	return $this->hasMany(CourseDetail::class);
    }
}
