<nav x-data="{ open: false }" class="bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-nav-link :href="route('front.news')" :active="request()->routeIs('front.news')">
                        {{ __('News') }}
                    </x-nav-link>


                </div>

            </div>
            <div class="flex items-end justify-end">
                @if (!Auth::check())
                    <x-button class=" bg-orange-500 hover:bg-orange-700" href="{{ route('login') }}">
                        {{ __('Admin Login') }}
                    </x-button>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button class=" bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Logout</button>
                    </form>
                @endif
            </div>




            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('front.news')" :active="request()->routeIs('front.news')">
                {{ __('News') }}
            </x-responsive-nav-link>

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                @if (Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @endif

            </div>
        </div>
    </div>
</nav>
