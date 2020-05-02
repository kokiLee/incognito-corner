<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anecdote;
use App\Repositories\Interfaces\StoryRepositoryInterface;

class AnecdoteController extends Controller
{
    private $storyRepository;

    public function __construct (StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getAllRecent()
    {
        return $this->storyRepository->allRecent(Anecdote::class);
    }

    public function getAllPopular()
    {
        return $this->storyRepository->allPopular(Anecdote::class);
    }

    public function update(Request $request)
    {
        $success = $this->storyRepository->updateStory($request, Anecdote::class);
        return response()->json($success, 200);
    }
}
