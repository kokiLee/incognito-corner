<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeekAdviceComment;
use App\SeekAdviceSubcomment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class SeekAdviceSubcommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addSubcomment($request, SeekAdviceSubcomment::class, SeekAdviceComment::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateSubcomment($request, SeekAdviceSubcomment::class);
        return response()->json($success, 200);
    }
}
