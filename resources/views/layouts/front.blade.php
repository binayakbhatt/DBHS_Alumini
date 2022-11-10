<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Don Bosco High School Haflong Alumni') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gradient-to-r from-purple-500 to-blue-500">
        @include('layouts.navbar')



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


        {{-- <footer class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-end">
                Created by : 2005 Batch
            </div>
        </footer> --}}

        <footer class="bg-cyan-100">
            <div class="container mx-auto px-8">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-1 mb-6 text-black">
                        <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="/">

                            <x-application-logo class="block h-15 w-auto fill-black" />

                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Links</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('front.news') }}"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">News</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="{{ route('front.alumni') }}"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Alumni</a>
                            </li>

                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Company</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                    Blog</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end">
                Created by : 2005 Batch
            </div>
        </footer>

    </div>

</body>

</html>
