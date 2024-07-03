@props(['post'])
<div class="card">
    <h2 class="font-bold text-xl">
        {{ $post->title }}
    </h2>
    {{-- Author and Date --}}
    <div class="text-xs font-light mb-4">
        <span>Posted by {{ $post->created_at->diffForHumans() }} </span>
        <a href="" class="text-blue-500 font-medium">USERNAME</a>
        <div class="txt-sm">
            <p> {{ Str::words($post->body, 15) }} </p>
            <a href="{{ route('posts.show') }}" class="text-blue-500 ml-2">Read more &rarr;</a>
        </div>
    </div>
</div>
