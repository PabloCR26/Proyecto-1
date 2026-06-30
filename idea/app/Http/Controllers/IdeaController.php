<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\IdeaStatus;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $status = $request->status;

        if (! in_array($status, IdeaStatus::values())) {
            $status = null;
        }
        $ideas = $user
            ->ideas()
            ->when($request->status, fn ($query, $status) => $query->where('status', $status))
            ->get();

        return view('idea.index', [
            'ideas' => $ideas,
            'statusCounts' => Idea::statusCounts(Auth::user()),
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
