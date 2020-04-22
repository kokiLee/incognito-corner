<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnconfirmedStory extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'author' => 'Anonymous',
        'approvals' => 0,
        'disapprovals' => 0,
        'reports' => 0
    ];
}
