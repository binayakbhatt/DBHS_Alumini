<body x-data="{ navOpen: false, scrolledFromTop: false }" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    :class="{
        'overflow-hidden': navOpen,
        'overflow-scroll': !navOpen
    }">
    <header
        class="
            fixed
            w-full
            bg-gradient-to-r from-purple-500 to-blue-500
            flex
            justify-between
            items-center
            px-4
            md:px-12
            transition-all
            duration-200
            h-24
         "
        :class="{ 'h-24': !scrolledFromTop, 'h-14': scrolledFromTop }">
        <a href="/">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAsMCwyNTYsMjU2IgpzdHlsZT0iZmlsbDojMDAwMDAwOyI+CjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9Im5vbmUiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im5vbmUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0iIiBzdHJva2UtZGFzaG9mZnNldD0iMCIgZm9udC1mYW1pbHk9Im5vbmUiIGZvbnQtd2VpZ2h0PSJub25lIiBmb250LXNpemU9Im5vbmUiIHRleHQtYW5jaG9yPSJub25lIiBzdHlsZT0ibWl4LWJsZW5kLW1vZGU6IG5vcm1hbCI+PHBhdGggZD0iTTg1LjMzMzMzLDE4Ni42NjY2N2gtMTZsMjEuMzMzMzMsLTU4LjY2NjY3aDE2ek0xMTIsNTMuMzMzMzNoMTZsNTMuMzMzMzMsMTMzLjMzMzMzaC0xNnpNMjM0LjEyOCwxMzguNjY2NjdjLTUuMzcwNjcsNTMuODI5MzMgLTUwLjkxMiw5NiAtMTA2LjEyOCw5NmMtNTguODE2LDAgLTEwNi42NjY2NywtNDcuODUwNjcgLTEwNi42NjY2NywtMTA2LjY2NjY3YzAsLTU4LjgxNiA0Ny44NTA2NywtMTA2LjY2NjY3IDEwNi42NjY2NywtMTA2LjY2NjY3YzU3LjAxODY3LDAgMTAzLjU4OTMzLDQ1LjAwMjY3IDEwNi4zOTQ2NywxMDEuMzMzMzNoLTEwLjY2NjY3Yy0yLjc4OTMzLC01MC40NDggLTQ0LjU5NzMzLC05MC42NjY2NyAtOTUuNzI4LC05MC42NjY2N2MtNTIuOTMzMzMsMCAtOTYsNDMuMDY2NjcgLTk2LDk2YzAsNTIuOTMzMzMgNDMuMDY2NjcsOTYgOTYsOTZjNDkuMzIyNjcsMCA5MC4wNDI2NywtMzcuNDA4IDk1LjM3MDY3LC04NS4zMzMzM3oiIGlkPSJzdHJva2VNYWluU1ZHIiBmaWxsPSIjNTI2NmJlIiBzdHJva2U9IiM1MjY2YmUiIHN0cm9rZS13aWR0aD0iNSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PC9wYXRoPjxnIHRyYW5zZm9ybT0ic2NhbGUoNS4zMzMzMyw1LjMzMzMzKSIgZmlsbD0iI2ZmZmZmZiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiPjxwYXRoIGQ9Ik0yMCwyNGgtM2wtNCwxMWgzeiI+PC9wYXRoPjxwYXRoIGQ9Ik0yMSwxMGgzbDEwLDI1aC0zeiI+PC9wYXRoPjxyZWN0IHg9IjE4IiB5PSIyNCIgd2lkdGg9IjE3IiBoZWlnaHQ9IjMiPjwvcmVjdD48cGF0aCBkPSJNNDEuODgyLDI2Yy0wLjk5OSw4Ljk4NiAtOC42MzQsMTYgLTE3Ljg4MiwxNmMtOS45MjUsMCAtMTgsLTguMDc1IC0xOCwtMThjMCwtOS45MjUgOC4wNzUsLTE4IDE4LC0xOGM5LjU4NywwIDE3LjQyNiw3LjU0MSAxNy45NDksMTdoMmMtMC41MjYsLTEwLjU2MiAtOS4yNTgsLTE5IC0xOS45NDksLTE5Yy0xMS4wMjgsMCAtMjAsOC45NzIgLTIwLDIwYzAsMTEuMDI4IDguOTcyLDIwIDIwLDIwYzEwLjM1MywwIDE4Ljg5MiwtNy45MDcgMTkuODk5LC0xOHoiPjwvcGF0aD48L2c+PC9nPgo8L3N2Zz4="
                alt="Logo" class="h-12 transform origin-left transition duration-200"
                :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }" />
        </a>
        <nav>
            <button class="md:hidden" @click="navOpen = !navOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="
                  fixed
                  left-0
                  right-0
                  min-h-screen
                  px-4
                  pt-8
                  space-y-4
                  text-white
                  transform
                  transition
                  duration-300
                  translate-x-full
                  md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
               "
                :class="{ 'translate-x-full': !navOpen }" :class="{ 'translate-x-0': navOpen }">
                <li class="flex items-center">
                    <a href="{{ route('front.news') }}" @click="navOpen = false">News</a>
                </li>
                <li class="flex items-center">
                    <a href="{{ route('front.alumni') }}" @click="navOpen = false">Alumni</a>
                </li>
                @if (!Auth::check())
                    <li class="flex items-center">
                        <a href="{{ route('login') }}" @click="navOpen = false">Login</a>
                    </li>
                    <li class="flex items-center">
                        <a href="{{ route('register') }}" @click="navOpen = false">Register</a>
                    </li>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button class=" bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Logout</button>
                    </form>
                @endif
            </ul>
        </nav>
    </header>

</body>
