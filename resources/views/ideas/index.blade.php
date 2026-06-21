<x-layout>

        <div class="mt-6 text-white">
            @if(count($ideas))
                <h2>Your Ideas</h2>
                <ul class="mt-6">
                    @foreach($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}" class="text-sm">{{$idea->description}}</a>
                    @endforeach
                </ul>
        </div>
        @else
            <p>No ideas yet. <a href="/ideas/create" class="underline">Create one</a>.</p>
        @endif
</x-layout>