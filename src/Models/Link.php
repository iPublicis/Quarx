<?php

namespace Yab\Quarx\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends QuarxModel
{
    public $table = 'links';

    public $primaryKey = 'id';

    protected $guarded = [];

    public static $rules = [
        'name' => 'required',
    ];
}
