<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confession;
use App\Repositories\Interfaces\StoryRepositoryInterface;

class ConfessionController extends Controller
{
    private $storyRepository;

    public function __construct (StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getAllRecent()
    {
        return $this->storyRepository->allRecent(Confession::class);
    }

    public function getAllPopular()
    {
        return $this->storyRepository->allPopular(Confession::class);
    }

    public function update(Request $request)
    {
        $success = $this->storyRepository->updateStory($request, Confession::class);
        return response()->json($success, 200);
    }
}
