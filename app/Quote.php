<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Quote extends Model
{
    use Translatable;
    protected $translatable = ['content', 'author'];
}
