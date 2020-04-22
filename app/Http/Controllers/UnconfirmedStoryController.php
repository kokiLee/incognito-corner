<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\StoryRepositoryInterface;

class UnconfirmedStoryController extends Controller
{
    private $storyRepository;

    public function __construct (StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getAll()
    {
        return $this->storyRepository->allUnconfirmedStories();
    }

    public function store(Request $request)
    {
        $unconfirmedStory = $this->storyRepository->createUnconfirmedStory($request);
        return response()->json($unconfirmedStory, 201);
    }

    public function update(Request $request)
    {
        $success = $this->storyRepository->updateUnconfirmedStory($request);
        return response()->json($success, 200);
    }
}
