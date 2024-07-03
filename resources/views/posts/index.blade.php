<x-layout>
    <h1>Latest Post</h1>
    <div class="grid grid-cols2 gap-6">
        @foreach ($posts as $post)
            <x-postCard :post="$post" />
        @endforeach
    </div>
    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
