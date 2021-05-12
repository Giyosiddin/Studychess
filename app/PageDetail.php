<?php

namespace App;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Spatie\MediaLibrary\HasMedia;

class PageDetail extends Model implements HasMedia
{
	use InteractsWithMedia;
	use Translatable;
    protected $translatable = ['name', 'text'];
    public $timestamps = false;

    public function childdetails()
    {
    	return $this->hasMany(PageDetail::class,'parent_id','id');
    }
}
