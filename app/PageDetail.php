<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class PageDetail extends Model
{
	use Translatable;
    protected $translatable = ['name', 'text'];
    public $timestamps = false;

    public function childdetails()
    {
    	return $this->hasMany(PageDetail::class,'parent_id','id');
    }
}
