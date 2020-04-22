<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface CommentRepositoryInterface 
{
    public function allCommentsWithStory(Request $request, $model);

    public function addComment(Request $request, $commentModel, $storyModel);
    public function addSubcomment(Request $request, $subcommentModel, $commentModel);
    
    public function updateComment(Request $request, $model);
    public function updateSubcomment(Request $request, $model);
}