<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnecdoteSubcomment extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'author' => 'Anonymous',
        'approvals' => 0,
        'disapprovals' => 0
    ];
}
