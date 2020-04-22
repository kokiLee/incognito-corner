<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfessionComment;
use App\ConfessionSubcomment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class ConfessionSubcommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addSubcomment($request, ConfessionSubcomment::class, ConfessionComment::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateSubcomment($request, ConfessionSubcomment::class);
        return response()->json($success, 200);
    }
}
