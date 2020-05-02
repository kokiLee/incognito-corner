<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeekAdvice extends Model
{
    protected $table = 'seek_advice';

    protected $guarded = [];

    protected $attributes = [
        'author' => 'Anonymous',
        'approvals' => 0,
        'disapprovals' => 0,
        'rating' => 0.00,
        'rating_sum' => 0.0,
        'number_of_ratings' => 0,
        'popularity' => 0.00,
        'number_of_comments' => 0
    ];

    public function comments()
    {
        return $this->hasMany('App\SeekAdviceComment', 'story_id');
    }
}
