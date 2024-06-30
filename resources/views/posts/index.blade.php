<x-layout>
    @auth
        <h1>Logged In</h1>
    @endauth
    @guest
        <h1>Guest</h1>
    @endguest
</x-layout>
