<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FunnyEvent;
use App\Repositories\Interfaces\StoryRepositoryInterface;

class FunnyEventController extends Controller
{
    private $storyRepository;

    public function __construct (StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getAllRecent()
    {
        return $this->storyRepository->allRecent(FunnyEvent::class);
    }

    public function getAllPopular()
    {
        return $this->storyRepository->allPopular(FunnyEvent::class);
    }

    public function update(Request $request)
    {
        $success = $this->storyRepository->updateStory($request, FunnyEvent::class);
        return response()->json($success, 200);
    }
}
