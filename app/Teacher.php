<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Teacher extends Model
{
	use Translatable;
    protected $translatable = ['name', 'about_her'];

    public $timestamps = false;
}
