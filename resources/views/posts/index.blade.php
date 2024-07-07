<x-layout>
    <h1>Latest Post</h1>
    @foreach ($posts as $post)
        <div class="card">
            <h2 class="font-bold text-xl">
                {{ $post->title }}
            </h2>
            <div class="text-xs font-light mb-4">
                <span>Posted by {{ $post->created_at->diffForHumans() }} </span>
                @if (auth()->check())
                    <a href="" class="text-blue-500 font-medium"> {{ auth()->user()->username }} </a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-500 font-medium">Login</a>
                @endif

                <p> {{ Str::words($post->body, 15) }} </p>
            </div>
        </div>
        </div>
    @endforeach
    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
