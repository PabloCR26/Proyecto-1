<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
    
        $ideas = Auth::user()->ideas()->get();

        return view('idea.index', [
            'ideas' => $ideas
        ]);
    }

    public function create(): void
    {
        //
    }

    public function store(StoreIdeaRequest $request): void
    {
        //
    }

    public function show(Idea $idea): void
    {
        //
    }

    public function edit(Idea $idea): void
    {
        //
    }

    public function update(UpdateIdeaRequest $request, Idea $idea): void
    {
        //
    }

    public function destroy(Idea $idea): void
    {
        //
    }
}