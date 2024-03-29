<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Page extends Model
{
	use Translatable;
    protected $translatable = ['title', 'meta_description','excerpt','body'];

    public function details()
    {
    	return $this->hasMany(PageDetail::class);
    }
}
