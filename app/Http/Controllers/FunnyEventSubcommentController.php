<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FunnyEventComment;
use App\FunnyEventSubcomment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class FunnyEventSubcommentController extends Controller
{
    private $commentRepository;

    public function __construct (CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        $comment = $this->commentRepository->addSubcomment($request, FunnyEventSubcomment::class, FunnyEventComment::class);
        return response()->json($comment, 201);
    }

    public function update(Request $request)
    {
        $success = $this->commentRepository->updateSubcomment($request, FunnyEventSubcomment::class);
        return response()->json($success, 200);
    }
}
