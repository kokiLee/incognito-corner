<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anecdote;
use App\AnecdoteComment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class AnecdoteCommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllWithStory(Request $request)
    {
        return $this->commentRepository->allCommentsWithStory($request, Anecdote::class);
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addComment($request, AnecdoteComment::class, Anecdote::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateComment($request, AnecdoteComment::class);
        return response()->json($success, 200);
    }
}
