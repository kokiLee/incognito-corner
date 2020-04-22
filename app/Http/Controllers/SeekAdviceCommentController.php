<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeekAdvice;
use App\SeekAdviceComment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class SeekAdviceCommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllWithStory(Request $request)
    {
        return $this->commentRepository->allCommentsWithStory($request, SeekAdvice::class);
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addComment($request, SeekAdviceComment::class, SeekAdvice::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateComment($request, SeekAdviceComment::class);
        return response()->json($success, 200);
    }
}
