<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeekAdviceComment extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'author' => 'Anonymous',
        'approvals' => 0,
        'disapprovals' => 0,
        'popularity' => 0,
        'number_of_subcomments' => 0
    ];

    public function subcomments()
    {
        return $this->hasMany('App\SeekAdviceSubcomment', 'comment_id');
    }
}
