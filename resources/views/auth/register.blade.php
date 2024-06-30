<x-layout>
    <h1 class="title">Register a new account</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input">
                @error('username')
                    {{ $message }}
                @enderror
            </div>
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="text" name="password" class="input">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            {{-- Confirm Password --}}
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="text" name="password_confirmation" class="input">
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </div>
            {{-- Submit --}}
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</x-layout>
