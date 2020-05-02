<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnecdoteComment;
use App\AnecdoteSubcomment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class AnecdoteSubcommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addSubcomment($request, AnecdoteSubcomment::class, AnecdoteComment::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateSubcomment($request, AnecdoteSubcomment::class);
        return response()->json($success, 200);
    }
}
