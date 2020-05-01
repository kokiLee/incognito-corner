<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface StoryRepositoryInterface 
{
    public function allUnconfirmedStories();
    public function createUnconfirmedStory(Request $request);
    public function updateUnconfirmedStory(Request $request);

    public function allRecent($model);
    public function allPopular($model);
    
    public function createStory($text, $author, $type, $tags);
    public function updateStory(Request $request, $model);
}