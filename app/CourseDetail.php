<?php

namespace App;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Spatie\MediaLibrary\HasMedia;

class CourseDetail extends Model implements HasMedia
{
     use InteractsWithMedia;
	use Translatable;
	 public $table = 'course_details';
    protected $translatable = ['name', 'text'];
    
    public $timestamps = false;
}
