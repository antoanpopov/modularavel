<?php

namespace Modules\Core\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    protected $fillable = [
        'iso_code',
        'locale',
        'native_name',
        'is_active',
        'flag',
        'time_format',
        'date_format',
    ];

    protected $table = 'core__languages';

}
