<header class="bg-blue-500 text-white shadow-lg">
    {{-- <nav class="container mx-auto py-3">
        <ul class="flex justify-end gap-6">
            <li>
                <a href="#" class="text-white hover:text-blue-300">Home</a>
            </li>
        </ul>
    </nav> --}}
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
            {{ __('Home') }}
        </x-nav-link>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-nav-link>
        </div>
    </div>
</header>
