<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FunnyEvent;
use App\FunnyEventComment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class FunnyEventCommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllWithStory(Request $request)
    {
        return $this->commentRepository->allCommentsWithStory($request, FunnyEvent::class);
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addComment($request, FunnyEventComment::class, FunnyEvent::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateComment($request, FunnyEventComment::class);
        return response()->json($success, 200);
    }
}
