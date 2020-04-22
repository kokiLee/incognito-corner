<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confession;
use App\ConfessionComment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class ConfessionCommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllWithStory(Request $request)
    {
        return $this->commentRepository->allCommentsWithStory($request, Confession::class);
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addComment($request, ConfessionComment::class, Confession::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateComment($request, ConfessionComment::class);
        return response()->json($success, 200);
    }
}
