<x-layout>
    <h1 class="title">Register a new account</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="" method="POST">
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input">
            </div>
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input">
            </div>
            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="text" name="password" class="input">
            </div>
            {{-- Confirm Password --}}
            <div class="mb-4">
                <label for="confirm_password">Confirm Password</label>
                <input type="text" name="confirm_password" class="input">
            </div>
        </form>
    </div>
</x-layout>
