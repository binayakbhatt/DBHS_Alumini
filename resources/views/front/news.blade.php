<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-14 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div
                        class="flex items-center justify-center bg-gradient-to-r from-purple-500 to-blue-700 b-5 shadow-lg p-3">
                        <h1 class="text-xl md:text-2xl text-white font-bold"> News </h1>
                    </div>


                    @foreach ($news as $item)
                        <div class="flex justify-left mt-5 mb-5">
                            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-full">
                                <h5 class="text-gray-900 text-xl text-center leading-tight font-bold mb-2">
                                    {{ $item->headline }}
                                </h5>
                                <h6 class="text-gray-900 text-xl text-center leading-tight font-medium mb-2">
                                    {{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}
                                </h6>
                                <p class="text-gray-700 text-base mb-4 text-justify">
                                    {{ Str::substr($item->body, 0, 300) }}
                                </p>
                                <div class="flex items-center justify-end ">
                                    <a href="{{ route('front.news-detail', $item->slug) }}"
                                        class="inline-block px-6 py-2.5 text-black font-medium text-xs leading-tight uppercase ">Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    {{ $news->links() }}
                </div>

            </div>
        </div>
    </div>

</x-front-layout>
