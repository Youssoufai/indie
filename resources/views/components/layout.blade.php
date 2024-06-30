<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-slate-100 text-black">
    <header class="bg-slate-800 p-8">
        <nav>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            @auth
                <div class="relative grid place-items-center" x-data="{ open: false }">
                    {{-- Dropdown Menu Button --}}
                    <button @click="open = !open" type="button" class="rounded">
                        <img src="https://picsum.photos/200" class="h-[1rem] w-[1rem] avatar" alt="">
                    </button>
                    {{-- Dropdown Menu --}}
                    <div x-show="open" @click.outside = "open=false"
                        class="bg-white rounded-sm shadow-lg top-10 absolute overflow-hidden font-light right-0 p-1">
                        <p class="username"> {{ auth()->user()->username }} </p>
                        <a href="" class="block hover:bg-slate-100 pl-4 pr-8 py-2 mb-1">Dashboard</a>
                        <form action="" method="POST">
                            @csrf
                            <button class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
            @guest
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </div>
            @endguest
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
