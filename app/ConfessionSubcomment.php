<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfessionSubcomment extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'author' => 'Anonymous',
        'approvals' => 0,
        'disapprovals' => 0
    ];
}
