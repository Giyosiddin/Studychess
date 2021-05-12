<?php

namespace App;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Spatie\MediaLibrary\HasMedia;

class Teacher extends Model implements HasMedia
{
	 use InteractsWithMedia;
	use Translatable;
    protected $translatable = ['name', 'about_her'];

    public $timestamps = false;
}
