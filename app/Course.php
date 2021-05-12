<?php

namespace App;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Spatie\MediaLibrary\HasMedia;

class Course extends Model implements HasMedia
{
     use InteractsWithMedia;
	use Translatable;

    protected $translatable = ['title', 'description','what_learn','for_who','short_text','time'];

    public function allDetails()
    {
    	return $this->hasMany(CourseDetail::class);
    }

    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }
}
