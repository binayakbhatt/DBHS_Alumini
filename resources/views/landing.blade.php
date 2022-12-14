<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-14 bg-white overflow-hidden sm:rounded-lg">
                <div class="p-6 ">



                    <div class="flex items-center justify-center bg-gradient-to-r from-purple-500 to-blue-700 b-5 p-3 rounded-t-xl">
                        <h1 class="text-2xl md:text-3xl text-white font-bold"> Don Bosco High School Alumni Association,
                            Haflong </h1>
                    </div>
                    <div
                        class="rounded-b-xl flex items-center justify-center bg-[url('/public/images/misc/hero.jpg')] bg-no-repeat bg-cover bg-center b-5 shadow-lg p-3 h-96">
                        <h1 class="text-2xl md:text-6xl text-white font-bold shadow-lg text-center">
                            &ldquo; A platform to connect all Alumni of Don Bosco High School, Haflong &rdquo;
                        </h1>
                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1  gap-6 mt-6">

                        <div class="md:flex bg-gray-100 rounded-xl p-4 md:p-4 shadow-lg border border-blue-200">
                            @if ($latest_event)
                                <div class="flex-shrink-0 hidden md:block mt-2">
                                    <img
                                        src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-event-advertising-kiranshastry-lineal-color-kiranshastry-1.png" />
                                </div>
                                <div class="md:ml-6">
                                    <div>
                                        <h3 class="text-2xl text-gray-800 font-semibold">{{ $latest_event->name }}</h3>
                                    </div>
                                    <!--Card Meta -->
                                    <div
                                        class="flex-col md:flex-row flex md:space-x-3 space-y-1 md:space-y-0 items-start md:items-end my-1">

                                        <p class="text-gray-600 flex space-x-1 max-w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm">
                                                Event Begins on:
                                                {{ \Carbon\Carbon::parse($latest_event->start_date)->format('d-m-Y') }}</span>
                                        </p>
                                        <p class="text-gray-600 flex space-x-1 max-w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm">
                                                Event Ends on:
                                                {{ \Carbon\Carbon::parse($latest_event->end_date)->format('d-m-Y') }}</span>
                                        </p>
                                    </div>
                                    <div class="text-gray-600 my-2 text-justify">
                                        {{ $latest_event->description }}
                                    </div>
                                </div>
                            @else
                                <div>
                                    No upcoming Event
                                </div>
                            @endif
                        </div>
                        <div class="md:flex bg-gray-100 rounded-xl p-4 md:p-4 shadow-lg border border-blue-200">
                            @if ($latest_news)
                                <div class="flex-shrink-0 hidden md:block mt-2">
                                    <img class="rounded-lg w-56"
                                        src="{{ asset('images/news/' . $latest_news->image) }}">
                                </div>
                                <!-- Card Body-->
                                <div class="md:ml-6">
                                    <!--Card Heading -->
                                    <div>
                                        <h3 class="text-2xl text-gray-800 font-semibold">{{ $latest_news->headline }}
                                        </h3>
                                    </div>
                                    <!--Card Meta -->
                                    <div
                                        class="flex-col md:flex-row flex md:space-x-3 space-y-1 md:space-y-0 items-start md:items-end my-1">

                                        <p class="text-gray-600 flex space-x-1 max-w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span
                                                class="text-sm">{{ \Carbon\Carbon::parse($latest_news->date)->format('d-m-Y') }}</span>
                                        </p>
                                        <p class="text-gray-600 flex space-x-1 max-w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-sm">{{ $latest_news->reporter }}</span>
                                        </p>
                                    </div>
                                    <!--Card Excerpt-->
                                    <div class="text-gray-600 my-2 text-justify">
                                        {{ Str::substr($latest_news->body, 0, 230) }}
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <x-button href="{{ route('front.news') }}">Go
                                            to News</x-button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-front-layout>
