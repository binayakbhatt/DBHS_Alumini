<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($news as $item)
                        <div class="flex justify-left mb-5">
                            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-full">
                                <h5 class="text-gray-900 text-xl text-center leading-tight font-medium mb-2">
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











                    {{-- @foreach ($news as $item)
                        <div class="flex justify-center">
                            <div class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
                                <a href="{{ route('front.news-detail', $item->slug) }}"
                                    class="block px-6 py-2 border-b border-gray-200 w-full rounded-lg bg-gray-100 text-black cursor-pointer">
                                    {{ $item->headline }}
                                </a>

                            </div>
                        </div>
                    @endforeach --}}
                </div>

            </div>
        </div>
    </div>

</x-front-layout>
