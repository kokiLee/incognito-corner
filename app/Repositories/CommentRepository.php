<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentRepository implements CommentRepositoryInterface
{

    public function allCommentsWithStory(Request $request, $model)
    {
        return $model::with(['comments' => function($query) {
                                               $query->orderBy('popularity', 'desc');
                                           }, 
                             'comments.subcomments' => function($query) {
                                                           $query->latest();
                                                       }
                            ])->where('id', $request->id)->first();
    }


    #region Create

    public function addComment(Request $request, $commentModel, $storyModel)
    {
        $request->validate(
        [
            'story_id' => ['required'],
            'text' => ['required', 'max:1000'],
        ]);
        $comment = $commentModel::create($request->all());

        $story = $storyModel::find($request->story_id);
        $story->increment('number_of_comments');
        $story->popularity += 2;
        $story->save();

        return $comment;
    }

    public function addSubcomment(Request $request, $subcommentModel, $commentModel)
    {
        $request->validate(
        [
            'comment_id' => ['required'],
            'text' => ['required', 'max:1000'],
        ]);
        $subcomment = $subcommentModel::create($request->all());

        $comment = $commentModel::find($request->comment_id);
        $comment->increment('number_of_subcomments');
        $comment->popularity += 1;
        $comment->save();

        return $subcomment;
    }

    #endregion Create


    #region Update

    public function updateComment(Request $request, $model)
    {
        $comment = $model::find($request->id);

        $comment->approvals += $request->approve;
        $comment->disapprovals += $request->disapprove;
        $comment->popularity = $comment->approvals * 2 + $comment->disapprovals + $comment->number_of_subcomments;

        return $comment->save();
    }

    public function updateSubcomment(Request $request, $model)
    {
        $subcomment = $model::find($request->id);

        $subcomment->approvals += $request->approve;
        $subcomment->disapprovals += $request->disapprove;

        return $subcomment->save();
    }

    #endregion Update

}