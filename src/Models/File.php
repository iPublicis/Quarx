<?php

namespace Yab\Quarx\Models;

use Illuminate\Database\Eloquent\Model;

class File extends QuarxModel
{
    public $table = 'files';

    public $primaryKey = 'id';

    protected $guarded = [];

    public static $rules = [
        'location' => 'required',
    ];
}
