<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeekAdvice;
use App\Repositories\Interfaces\StoryRepositoryInterface;

class SeekAdviceController extends Controller
{
    private $storyRepository;

    public function __construct (StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getAllRecent()
    {
        return $this->storyRepository->allRecent(SeekAdvice::class);
    }

    public function getAllPopular()
    {
        return $this->storyRepository->allPopular(SeekAdvice::class);
    }

    public function update(Request $request)
    {
        $success = $this->storyRepository->updateStory($request, SeekAdvice::class);
        return response()->json($success, 200);
    }
}
