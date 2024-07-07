<x-layout>
    <h1>Welcom {{ auth()->user()->username }} you have {{ $posts->total() }} posts </h1>
    {{-- Create Post Form --}}

    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new post</h2>
        @if (session('success'))
            {{-- Session Messages --}}

            <div class="mb-4">

                {{--  <x-flashMsg msg="Your post was created" bg="bg-yellow-500" /> --}}
            </div>
            {{--         @elseif (session('delete'))
            <div class="mb-2">
                <x-flashMsg msg="{{ session('delete') }}" bg="bg-red-500" />
            </div> --}}
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="input" value="{{ old('title') }}">
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body">Post Content</label>
                <textarea name="body" class="input @error('body')
                ring-red-500
                @enderror"
                    rows="4"></textarea>
                @error('body')
                    <p> {{ $message }} </p>
                @enderror
            </div>
            {{-- Submit Button --}}
            <button class="btn">Create</button>
            {{--  --}}
        </form>
    </div>
    {{--  --}}
    <h2>Your latest Post</h2>
    <div class="grid grid-cols2 gap-6">
        @foreach ($posts as $post)
            <x-postCard :post="$post">
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white mx-3 py-1 text-xs rounded-md">Delete</button>
                </form>
            </x-postCard>
        @endforeach
    </div>
    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
