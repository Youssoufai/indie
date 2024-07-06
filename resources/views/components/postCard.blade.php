@props(['post', 'full' => false])
<div class="card">
    <h2 class="font-bold text-xl">
        {{ $post->title }}
    </h2>
    {{-- Author and Date --}}
    <div class="text-xs font-light mb-4">
        <span>Posted by {{ $post->created_at->diffForHumans() }} </span>
        <a href="" class="text-blue-500 font-medium"> {{ auth()->user()->username }} </a>
        {{-- Body --}}
        @if ($full)
            <div class="text-sm">
                <p> {{ $post->body }} </p>
            </div>
        @else
            <div class="txt-sm">
                <p> {{ Str::words($post->body, 15) }} </p>
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500 ml-2">Read more &rarr;</a>
            </div>
        @endif
        <div class="flex items-center justify-end gap-4 mt-3">
            {{ $slot }}
        </div>
    </div>

</div>
