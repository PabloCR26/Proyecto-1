<x-layout>
        @if($ideas->count())
            <div class="mt-6 text-white">
                <h2 class="font-bold text-xl">All Ideas</h2>

                <ul class="grid grid-cols-2 gap-x-6 gap-y-4">
                    @foreach($ideas as $idea)
                        <x-idea-card href="/ideas/{{ $idea->id }}">
                         {{ $idea->description }}
                        </x-idea-card>
                    @endforeach
                </ul>
            </div>
        @else
            <p class="text-white">No ideas yet. <a href="/ideas/create" class="underline">Create one</a>.</p>
        @endif
    </div>
</x-layout>